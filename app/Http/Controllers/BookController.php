<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function index(){
        $model = Book::all();
        return view('book_index', compact('model'));
    }
    public function create(){
        return view('book_form');
    }
    public function update($id){
        $model = Book::findOrFail($id);
        return view('book_form', compact('model'));
    }
    public function add(Request $request){
        $input = $request->all();
        $input['published_date'] = DateHelper::formatDateForMysql($input['published_date']);
        $model = new Book($input);
        $model->save();
        Session::flash('message', 'Data has been created');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/book'));
    }
    public function edit(Request $request){
        $input = $request->all();
        $input['published_date'] = DateHelper::formatDateForMysql($input['published_date']);
        $model = Book::findOrFail($input['id']);
        $model->update($input);
        Session::flash('message', 'Data has been updated');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/book'));
    }
    public function delete($id){
        Book::destroy($id);
        Session::flash('message', 'Data has been deleted');
        Session::flash('alert-class', 'alert-success');
        return redirect(url('/book'));
    }
}
