@extends('layouts.app')

@section('page-title')
    {{ $tag->tag }} | Lazy Cooking
@endsection

@section('contents')
    <div class="featured-recipes">
        <h4>{{ $tag->tag }}</h4>
        @include('recipe.partials.lists')
        <!-- end of recipe list -->
    </div>
@endsection
