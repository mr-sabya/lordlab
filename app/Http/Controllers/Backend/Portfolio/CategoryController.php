<?php

namespace App\Http\Controllers\Backend\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('backend.portfolio.category.index');
    }
}
