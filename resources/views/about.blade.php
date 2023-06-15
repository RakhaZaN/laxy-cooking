@extends('layouts.app')

@section('page-title')
    About | Lazy Cooking
@endsection

@section('contents')
    <section class="about-page">
        <article>
            <h2>About Us</h2>
            <p>
                LazyCooking merupakan website yang menyediakan resep terlengkap mengenai hidangan yang simple dan
                mudah untuk dimasak.
            </p>
            <p>
                Memiliki saran dan kritik untuk kami?
            </p>
            <a href="{{ route('contact') }}" class="btn"> contact </a>
        </article>
        <!-- needs fixes -->
        <img src="{{ asset('img/about.jpeg') }}" alt="Person Pouring Salt in Bowl" class="img about-img" />
    </section>

    <section class="featured-recipes">
        <h5 class="featured-title">Resep terpopuler</h5>
        @include('recipe.partials.lists')
    </section>
@endsection
