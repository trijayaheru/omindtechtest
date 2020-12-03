<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    public function index(){
        $model = Author::all();
        return view('author_index', compact('model'));
    }
    public function create(){
        return view('author_form');
    }
    public function update($id){
        $model = Author::findOrFail($id);
        return view('author_form', compact('model'));
    }
    public function add(Request $request){
        $input = $request->all();
        $model = new Author($input);
        $model->save();
        Session::flash('message', 'Data has been created');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/author'));
    }
    public function edit(Request $request){
        $input = $request->all();
        $model = Author::findOrFail($input['id']);
        $model->update($input);
        Session::flash('message', 'Data has been updated');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/author'));
    }
    public function delete($id){
        Author::destroy($id);
        Session::flash('message', 'Data has been deleted');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/author'));
    }
}
