<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Category;

class OptionsController extends Controller
{
    //
    public function index()
    {
        $options = Option::all();
        return view('options.index', compact('options'));
    }

    public function create()
    {
        //pluck function ---'description' as value and 'id' as key
        $categories = Category::pluck('description', 'id');
        return view('options.create', compact('categories')); //In compact, we pass the value of the categories variable

    }

    //Store sent logs
    public function store(Request $request)
    {

        $option = new Option();

        //this is what stores us in the form
        $option->option = $request->option;
        $option->category_id = $request->category_id;

        $option->save();

        //after saving data, redirect us to the index
        return redirect()->route('options.index');

    }

    //function to edit
    public function edit($id)
    {
        $categories = Category::pluck('description', 'id');
        $option = Option::find($id);

        return view('options.edit', compact('option', 'categories'));

    }


    //function to update data
    public function update(Request $request, $id)
    {
        $option = Option::find($id);

        $option->update($request->all());

        return redirect()->route('options.index');
    }

    //function to delete data
    public function destroy($id)
    {
        $option = Option::find($id);

        $option->delete();

        return redirect()->route('options.index');

    }
}