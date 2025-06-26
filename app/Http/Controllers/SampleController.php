<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::orderBy('order')->orderBy('created_at', 'desc')->get();
        return view('admin.samples.index', compact('samples'));
    }

    public function create()
    {
        return view('admin.samples.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'audio_file' => 'required|file|mimes:mp3,wav,m4a|max:10240',
            'category' => 'required|string',
            'duration' => 'required|integer|min:1',
            'is_featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $audioPath = $request->file('audio_file')->store('samples', 'public');

        Sample::create([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'audio_file' => $audioPath,
            'category' => $request->category,
            'duration' => $request->duration,
            'is_featured' => $request->boolean('is_featured'),
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('samples.index')->with('success', 'Sample uploaded successfully!');
    }

    public function show(Sample $sample)
    {
        return view('admin.samples.show', compact('sample'));
    }

    public function edit(Sample $sample)
    {
        return view('admin.samples.edit', compact('sample'));
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
