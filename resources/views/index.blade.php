@extends('layouts.app')

@section('contents')
    <!-- header -->
    <header class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Lazy Cooking</h1>
                <h4>Satisfy your hunger with minimal effort, maximum flavor.</h4>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <section class="recipes-container">
        @include('layouts.partials.aside')
        <!-- recipes list -->
        @include('recipe.partials.lists')
        <!-- end of recipes list -->
    </section>
@endsection
