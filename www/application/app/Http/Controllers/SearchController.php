<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Search;

class SearchController extends Controller
{
    public function form(){
        return view('form');
    }

    public function search(){
        $search = Search::all();
        return view('search', compact('search'));
    }

    public function store(Request $request){
        $search = Search::create([
            'search'=>$request->input('search')
        ]);
        return redirect('/search');
    }

}
