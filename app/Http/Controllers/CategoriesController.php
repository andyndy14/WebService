<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\CategoryModel;
use Illuminate\Http\Request;


class CategoriesController extends Controller 
{

    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = CategoryModel::all();
        return response($data);
    }

    
    public function show($id)
    {
        $data = CategoryModel::where('id', $id)->get();
        return response($data);
    }

    
    public function store(Request $request)
    {
        $data = new CategoryModel();
        $data->name = $request->input('name');
        $data->save();
        return response($data);
    }

    public function update(Request $request, $id)
    {
        $data = CategoryModel::findOrFail($id);
        $data->update($request->all());
        return response($data);
    }

    public function destroy($id)
    {
        $data = CategoryModel::findOrFail($id);
        $data->delete();
        return response($data);
    }
}


