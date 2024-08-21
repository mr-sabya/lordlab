<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sub_heading',
        'heading',
        'text',
        'image',
        'button_1_text',
        'button_1_link',
        'button_2_text',
        'button_2_link'
    ];
}
