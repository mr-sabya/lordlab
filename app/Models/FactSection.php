<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactSection extends Model
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

        'counter_1',
        'counter_1_title',
        'counter_1_text',

        'counter_2',
        'counter_2_title',
        'counter_2_text',

        'counter_3',
        'counter_3_title',
        'counter_3_text',
    ];
}
