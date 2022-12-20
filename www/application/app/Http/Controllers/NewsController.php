<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('search', compact('news'));
    }

    public function form(){
        
        return view('form');
    }

    public function store(Request $request){
        $news = News::create([
            'search'=>$request->input('search')
        ]);
        return redirect('/search');
    }
}
