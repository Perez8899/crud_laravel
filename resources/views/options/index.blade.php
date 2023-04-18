@extends('layouts.apps')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Option</th>
          <th class="w-1/16 py-4 ...">Category_id</th>
          <th class="w-1/16 py-4 ...">Created</th>
          <th class="w-1/16 py-4 ...">Updated</th>
          <th class="w-28 py-4 ...">Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($options as $row)
            

        <tr>
            <!--we call the data from the BD-->
          <td class="py-3 px-6">{{ $row->id }}</td>
          <td class="p-3">{{ $row->option }}</td>
          <td class="p-3 text-center">{{ $row->category->description}}</td> <!--if we want the numerical 'id' it would be: 'category_id'-->
          <td class="p-3 text-center">{{ $row->created_at }}</td>
          <td class="p-3 text-center">{{ $row->updated_at }}</td>

          <td class="p-3 flex justify-center">
            <form action="{{ route('options.destroy', $row->id)}}" method="POST">
              @csrf
              @method('delete')
              <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>
            </form>
            
            <a href="{{route('options.edit', $row->id)}}" class="bg-blue-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>

        </tr>
        
        @endforeach

      </tbody>
    </table>
    </div>
    
@endsection