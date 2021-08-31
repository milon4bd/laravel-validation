<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Form Validation</title>
</head>

<body class="bg-purple-50 ">
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="container text-center pt-20 w-3/4 mx-auto">
    <span class="text-red-300 text-3xl">

        @if(session('message'))
        {{session('message')}}
        @endif
    </span>
        <h2 class="text-4xl mb-4">User Registration Form </h2>
        <hr>
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="py-8 text-left w-2/3 mx-auto text-3xl">

                <label class="w-1/4 inline-block" for="name">Name:</label>
                <input value="{{old('name')}}" class="bg-purple-50 border p-2 w-3/5" type="text" name="name" id="name" placeholder="Enter Your Name">
                <span class="text-red-400">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="py-8 text-left w-2/3 mx-auto text-3xl">

                <label class="w-1/4 inline-block" for="email">Email:</label>
                <input value="{{old('email')}}" class="bg-purple-50 border p-2 w-3/5" type="text" name="email" id="email" placeholder="Enter Your Email">
                <span class="text-red-400">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="py-8 text-left w-2/3 mx-auto text-3xl">
                <label class="w-1/4 inline-block" for="password">Password :</label>
                <input value="{{old('password')}}" class="bg-purple-50 border p-2 w-3/5" type="password" name="password" id="password" placeholder="Enter Your Password ">
                <span class="text-red-400">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="py-8 text-left w-2/3 mx-auto text-3xl">
                <label class="w-1/4 inline-block" for="cpassword">Confirm Password :</label>
                <input value="{{old('cpassword')}}" class="bg-purple-50 border p-2 w-3/5" type="password" name="cpassword" id="cpassword" placeholder="Re-enter Your Password ">
                <span class="text-red-400">@error('cpassword') {{$message}} @enderror</span>
            </div>
            <hr>
            <div class="py-8 text-center text-3xl">

                <button class="bg-blue-400 p-2 rounded hover:bg-blue-300 transition duration-500" type="submit">Registration</button>
            </div>
        </form>
    </div>

</body>

</html>