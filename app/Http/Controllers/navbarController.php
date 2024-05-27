<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\navbar;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class navbarController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $navbars = navbar::all();

        //render view with posts
        return view('/welcomepageee', compact('navbars'));
    }
}