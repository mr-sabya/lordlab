<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function image()
    {
        return view('backend.media.image.index');
    }
}
