<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    public function index()
    {
       $samples = Sample::all();
       return view('admin.samples.index', compact('samples'));
    }

public function play($id)
{
    $sample = Sample::findOrFail($id);
    $path = storage_path('app/public/' . $sample->audio_file);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => 'audio/mpeg',
        'Content-Disposition' => 'inline; filename="' . basename($path) . '"'
    ]);
}


public function securePlay(Request $request, $id, $token)
{
    $sample = \App\Models\Sample::findOrFail($id);




    $expectedToken = hash_hmac('sha256', $id . '|' . $sample->audio_file, config('app.key'));
    if ($token !== $expectedToken) {
        abort(403, 'Unauthorized access.');
    }

    $path = storage_path('app/public/' . $sample->audio_file);
    if (!file_exists($path)) {
        abort(404, 'Audio file not found.');
    }

    $size = filesize($path);
    $length = $size;
    $start = 0;
    $end = $size - 1;
    $status = 200;

    $headers = [
        'Content-Type' => mime_content_type($path),
        'Accept-Ranges' => 'bytes',
        'Cache-Control' => 'no-cache',
    ];

    if ($request->headers->has('Range')) {
        $range = $request->header('Range');
        if (preg_match('/bytes=(\d*)-(\d*)/', $range, $matches)) {
            $start = intval($matches[1]);
            if (!empty($matches[2])) {
                $end = intval($matches[2]);
            }
        }

        $length = $end - $start + 1;
        $status = 206;
        $headers['Content-Range'] = "bytes $start-$end/$size";
        $headers['Content-Length'] = $length;
    } else {
        $headers['Content-Length'] = $size;
    }

    return response()->stream(function () use ($path, $start, $end) {
        $stream = fopen($path, 'rb');
        fseek($stream, $start);
        $bytesToSend = $end - $start + 1;
        $buffer = 1024 * 8;

        while (!feof($stream) && $bytesToSend > 0) {
            $chunk = fread($stream, min($buffer, $bytesToSend));
            echo $chunk;
            $bytesToSend -= strlen($chunk);
            @ob_flush();
            flush();
        }
        fclose($stream);
    }, $status, $headers);
}



    public function create()
    {
        return view('admin.samples.index');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'audio_file' => 'required|file|mimes:mp3,wav,m4a|max:50240',
            'category' => 'required|string',
            'duration' => 'required|integer|min:1',
            'is_featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);



   $validated['audio_file'] =  $request->file('audio_file')->store('samples', 'public');
    Sample::create($validated);

        return redirect()->route('samples.index')->with('success', 'Sample uploaded successfully!');
    }

    public function show(Sample $sample)
    {
    return view('admin.samples.index', compact('sample'));
    }

    public function edit(Sample $sample)
    {
        return view('admin.samples.index', compact('sample'));
    }

    public function update(Request $request, Sample $sample)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'audio_file' => 'sometimes|file|mimes:mp3,wav,m4a|max:10240',
            'category' => 'required|string',
            'duration' => 'required|integer|min:1',
            'is_featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $data = $request->only(['title', 'title_ar', 'description', 'description_ar', 'category', 'duration', 'order']);
        $data['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('audio_file')) {
            // Delete old file
            if ($sample->audio_file) {
                Storage::disk('public')->delete($sample->audio_file);
            }
            $data['audio_file'] = $request->file('audio_file')->store('samples', 'public');
        }

        $sample->update($data);

        return redirect()->route('samples.index')->with('success', 'Sample updated successfully!');
    }

    public function destroy(Sample $sample)
    {
        if ($sample->audio_file) {
            Storage::disk('public')->delete($sample->audio_file);
        }

        $sample->delete();

        return redirect()->route('samples.index')->with('success', 'Sample deleted successfully!');
    }
}
