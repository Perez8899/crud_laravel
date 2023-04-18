@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Description</th>
          <th class="w-1/16 py-4 ...">Created</th>
          <th class="w-1/16 py-4 ...">Updated</th>
          <th class="w-28 py-4 ...">Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $row)
            
        <!--table data-->
        <tr>
          <td class="py-3 px-6">{{ $row->id }}</td>
          <td class="p-3">{{ $row->description }}</td>
          <td class="p-3 text-center">{{ $row->created_at }}</td>
          <td class="p-3 text-center">{{ $row->updated_at }}</td>

          <td class="p-3 flex justify-center">
            <form action="{{ route('categories.destroy', $row->id)}}" method="POST">
              @csrf
              @method('delete')
              <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>
            </form>
            
            <a href="{{route('categories.edit', $row->id)}}" class="bg-blue-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>

        </tr>
        
        @endforeach

      </tbody>
    </table>
    </div>
    
@endsection