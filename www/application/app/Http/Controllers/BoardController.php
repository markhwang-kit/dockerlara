<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    // public function index(){
    //     $boards = Board::all();
    //     return view('boards.index',compact('boards'));
    // }
    public function index(){
        return view('boards.index', ['boards' => Board::all() -> sortDesc()]);
    }
    public function create(){
        
        return view('boards.create');
    }

    public function show($id){
        $board = Board::where('id', $id) -> first();
        return view('boards.show', compact('board'));
    }

    public function store(Request $request){
        $validation = $request -> validate([
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'story' => 'required'
        ]);
        $board = new Board();
        //$board -> user_id = auth() -> user() -> id;
        //$board -> user_name = auth() -> user() -> name;
        $board -> title = $validation['title'];
        $board -> story = $validation['story'];

        if($request -> hasFile('picture')){
            $fileName = time().'_'.$request -> file('picture') -> getClientOriginalName();
            $path = $request -> file('picture') -> storeAs('public/images', $fileName);
            $board -> image_name = $fileName;
            $board -> image_path = $path;
        }
        $board -> save();

        return redirect('boards/'.$board -> id);
    }
}
