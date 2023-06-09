@extends('layouts.app')

@section('body')
    class="bg-cyan-950"
 
@endsection

@section('content')
<div class="container mx-auto flex flex-wrap py-6">

 @include('blog.list.list')
</div> 
 
@endsection