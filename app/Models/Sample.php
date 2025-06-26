<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'description',
        'description_ar',
        'audio_file',
        'category',
        'duration',
        'is_featured',
        'order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'duration' => 'integer',
        'order' => 'integer',
    ];

    public function getLocalizedTitle($locale = 'en')
    {
        return $locale === 'ar' ? $this->title_ar : $this->title;
    }

    public function getLocalizedDescription($locale = 'en')
    {
        return $locale === 'ar' ? $this->description_ar : $this->description;
    }

    public function getFormattedDuration()
    {
        $minutes = floor($this->duration / 60);
        $seconds = $this->duration % 60;
        return sprintf('%d:%02d', $minutes, $seconds);
    }
}
