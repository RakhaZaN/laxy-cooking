@extends('layouts.app')

@section('page-title')
    Recipes | Lazy Cooking
@endsection

@section('contents')
    <section class="recipes-container">
        <!-- tag container -->
        @include('layouts.partials.aside')
        <!-- end of tag container -->
        <!-- recipes list -->
        @include('recipe.partials.lists')
    </section>
@endsection
