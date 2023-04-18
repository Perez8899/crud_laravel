@extends('layouts.apps')

@section('title', 'Edit')

@section('content')

<form action="{{ route('options.update', $option->id)}}" method="POST"
    class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')
     <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
        Edit Option {{ $option->id }}
    </h2>

     <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Option" name="option" value="{{ $option->option }}">

       

       <select name="category_id" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
              placeholder="Category_id" name="category_id">>

              <option selected disabled value="">-- Select a Category --</option>

              @foreach ($categories as $id => $description)
                      <option value="{{ $id }}">{{ $description }}</option>
              @endforeach
       </select>

       
     <button type="submit" class="my-3 w-full bg-green-300 p-2 font-semibold
            rounded text-white hover:bg-green-500">
            Send
     </button>



</form>

@endsection