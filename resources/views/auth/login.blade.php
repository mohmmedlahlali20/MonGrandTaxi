@extends('base')
@section('Titel', 'login')
@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="text-center">
        <h1 class="font-bold text-2xl">Welcome Back </h1>
        <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="">
            <label class="font-semibold text-xs" for="usernameField">Username or Email</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
            <label class="font-semibold text-xs mt-3" for="passwordField">Password</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="password">
            <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Login</button>
            <div class="">
                <a class="text-blue-400 hover:text-blue-500" href="#">Forgot Password</a>
                <span class="mx-2 text-gray-300">/</span>
                <a class="text-blue-400 hover:text-blue-500" href="/register">Sign Up</a>
            </div>
        </form>
    </div>
</div>

@endsection
