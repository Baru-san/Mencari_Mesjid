@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
 
@endsection

@section('content')

<form onsubmit="return validateForm()" method="post" action="/signin">
    @csrf
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container rounded-lg max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Sign In</h1>
            <div class="py-5">
                <select name="role" id="role"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
                    <option value="" hidden>Daftar Sebagai</option>
                    <option value="0">Jemaah</option>
                    <option value="1">Pengurus</option>
                </select>
            </div>

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4 "
                name="name"
                placeholder="Nama Lengkap"
                required />

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email"
                required />

            <input
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                id="password"
                placeholder="Password" 
                required/>

                

            <p id="error-message" class="text-red-500"></p>


            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg w-full text-center" type="submit" value="daftar">
                Sign In
            </button>


        </div>
    </div>
</div>
</form>
<!-- End Hero Section -->
 

<script>
    function validateForm(event) {
        event.preventDefault();

        var passwordField = document.getElementById("password");
        var confirmField = document.getElementById("confirm_password");
        var errorMessage = document.getElementById("error-message");

        // Get the values of both input fields
        var passwordValue = passwordField.value;
        var confirmValue = confirmField.value;

        // Check if the values are the same
        if (passwordValue === confirmValue) {
            // Values match, form can be submitted
            errorMessage.innerHTML = "";
            event.target.submit();
        } else {
            // Values don't match, show an error message
            errorMessage.innerHTML = "Password and Konfirmasi Password must match";
        }
    }
</script>
  
 
@endsection