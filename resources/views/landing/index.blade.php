@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
 
@endsection

@section('content')

<div class="flex justify-center pt-10">
    @include('landing.component.card')
</div>

<div class="mt-20 xs:mt-5 gap-5" style="display: flex; justify-content: center; align-items: center; height: 700px;">

@include('landing.component.jadwalShalat')
</div>
@include('landing.component.berita')
<!-- End Hero Section -->
 
 
 
@endsection