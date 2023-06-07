@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
 
@endsection

@section('content')

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container rounded-lg max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Log in</h1>

            @if (session('Information'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success alert!</span> {{ session('Information') }}
              </div>                
            
        @endif

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="fullname"
                placeholder="Nama Lengkap" />

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email" />

            <input
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />
            <input
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="confirm_password"
                placeholder="Konfirmasi Password" />

            <div class="content-center rounded-md fill-black max-w-sm flex flex-col justify-center px-3">

            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg w-full text-center">
                Login
            </button>

            <div class="text-grey-dark mt-6" >
                Tidak mempunyai akun ?
                <a class="no-underline border-b border-blue text-blue-600 hover:text-blue-800 font-semibold hover:font-bold" href="/signin">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
 
 
 
@endsection