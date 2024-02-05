@extends('base')
@section('Titel', 'register')
@section('content')
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">MonGrandTaxi</h1>
                <p class="text-white mt-1">Bonjoure dans MonGrandTaxi </p>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form class="bg-white" action="" method="">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <input class="pl-2 outline-none border-none" type="text" name="username" id=""
                        placeholder="Username" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="pl-2 outline-none border-none" type="text" name="email" id=""
                        placeholder="email" />

                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="pl-2 outline-none border-none" type="text" name="password" id=""
                        placeholder="Password" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                   <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="pl-2 outline-none border-none" type="text" name="" id=""
                        placeholder="Confirmer Password" />
                </div>
                <button type="submit"
                    class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
                <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer"><a href="/login">ja</a></span>
            </form>
        </div>
    </div>
@endsection
