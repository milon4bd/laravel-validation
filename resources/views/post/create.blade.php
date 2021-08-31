@extends('post.app')
@section('content')

<a class="underline text-blue-500" href="{{route('post.index')}}"> Go Back</a>
<h1 class="text-4xl text-center my-6">Insert New Data </h1>
<hr>
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
@csrf 
    <div class="my-3 w-1/2 mx-auto">
        <label class="block font-medium text-sm text-gray-700 mb-3" for="title"> Post Title</label>
        <input class="border bg-red-200  w-full p-2" type="text" name="title" id="title">
    </div>
    <div class="my-3 w-1/2 mx-auto">
        <label class="block font-medium text-sm text-gray-700 mb-3" for="body"> Post Body</label>
        <textarea class="border bg-red-200  w-full p-2" name="body" id="body" cols="30" rows="10"></textarea>
    </div>
    <div class="my-3 w-1/2 mx-auto">
        <label class="block font-medium text-sm text-gray-700 mb-3" for="image"> Post image</label>
        <input class="border bg-red-200  w-full p-2" type="file" name="image" id="image">
    </div>
    <div class="my-3 w-1/2 mx-auto">
      <button  class="border border-black hover:bg-green-600 transition w-full"  type="submit">Submit</button>
    </div>
</form>
@endsection