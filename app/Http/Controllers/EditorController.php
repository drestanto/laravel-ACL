<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor',['except'=>'otherPage']);
    }

    public function index()
    {
    	return view('admin.editor');
    }

    public function page()
    {
        return view('admin.editortest');
    }

    public function otherPage()
    {
        return view('admin.editortestex');
    }
}
