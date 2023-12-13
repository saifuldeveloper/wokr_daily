<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status'];

    public function languages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LevelLanguage::class);
    }

    public function language(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(LevelLanguage::class)->where('lang', app()->getLocale());
    }

    public function getLangTitleAttribute()
    {
        return $this->language ? $this->language->title : $this->title;
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
