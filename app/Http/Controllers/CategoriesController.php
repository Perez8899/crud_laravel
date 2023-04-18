<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{

    //Extension
    public function index()
    {
        //Select all categories
        $categories = Category::all();
        //Select all categories and send them to the index view
        return view('categories.index', compact('categories'));
    }

    //function to create new category
    public function create()
    {

        return view('categories.create');

    }

    //Store sent logs
    public function store(Request $request)
    {

        $category = new Category();

        //this is what stores us in the form
        $category->description = $request->description;

        $category->save();

        //after saving data, redirect us to the index
        return redirect()->route('categories.index');

    }

    //function to edit
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    //function to update data
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    //function to delete data
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');

    }
}