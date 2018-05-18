<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = BookModel::all();
        return response($data);
    }

    public function show($id)
    {
        $data = BookModel::where('id', $id)->get();
        return response($data);
    }

    public function store(Request $request)
    {
        $data = new BookModel();
        $data->title = $request->input('title');
        $data->isbn = $request->input('isbn');
        $data->id_categories = $request->input('id_categories');
        $data->save();
        return response($data);
    }

    public function update(Request $request, $id)
    {
        $data = BookModel::findOrFail($id);
        $data->update($request->all());
        return response($data);
    }

    public function destroy($id)
    {
        $data = BookModel::findOrFail($id);
        $data->delete();
        return response($data);
    }

}
