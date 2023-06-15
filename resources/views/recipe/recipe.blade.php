@extends('layouts.app')

@section('page-title')
    {{ $recipe->name }} | Lazy Cooking
@endsection

@section('contents')
    <div class="recipe-page">
        <section class="recipe-hero">
            <img src="{{ $recipe->image }}" class="img recipe-hero-img" />
            <article class="recipe-info">
                <h2>{{ $recipe->name }}</h2>
                <p>{{ $recipe->description }}</p>
                <div class="recipe-icons">
                    <article>
                        <i class="fas fa-clock"></i>
                        <h5>prep time</h5>
                        <p>{{ $recipe->prep_time }} menit.</p>
                    </article>
                    <article>
                        <i class="far fa-clock"></i>
                        <h5>cook time</h5>
                        <p>{{ $recipe->cook_time }} menit.</p>
                    </article>
                    <article>
                        <i class="fas fa-user-friends"></i>
                        <h5>serving</h5>
                        <p>{{ $recipe->serving_count }} servings</p>
                    </article>
                </div>
                <p class="recipe-tags">
                    Tags :
                    @forelse ($recipe->tags as $item)
                        <a href="{{ route('tag', [$item->tag]) }}">{{ $item->tag }}</a>
                    @empty
                        No tag
                    @endforelse
                </p>
            </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
            <article>
                <h4>instructions</h4>
                @forelse ($recipe->instructions as $item)
                    <!-- single instruction -->
                    <div class="single-instruction">
                        <header>
                            <p>step {{ $item->step }}</p>
                            <div></div>
                        </header>
                        <p>{{ $item->instruction }}</p>
                    </div>
                    <!-- end of single instruction -->
                @empty
                    <p>No instructions</p>
                @endforelse
            </article>
            <article class="second-column">
                <div>
                    <h4>ingredients</h4>
                    @forelse ($recipe->ingredients as $item)
                        <p class="single-ingredient">{{ $item->ingredient }}</p>
                    @empty
                        <p class="single-ingredient">No Ingredient</p>
                    @endforelse
                </div>
                <div>
                    <h4>tools</h4>
                    @forelse ($recipe->tools as $item)
                        <p class="single-tool">{{ $item->tool }}</p>
                    @empty
                        <p class="single-tool">No tools</p>
                    @endforelse
                </div>
            </article>
        </section>
    </div>
@endsection

@push('add-contents')
    <div class="page">
        <div class="single-instruction">
            <header>
                <p>Recipe videos that can be your inspiration</p>
                <div></div>
            </header>
            <div class="references">
                @forelse ($recipe->videos as $item)
                    <iframe class="reference" src="{{ $item->url }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                @empty
                    <p>No discover available yet</p>
                @endforelse
            </div>
        </div>

        <div class="single-instruction">
            <header>
                <p>Top Picks: Discover the Finest Restaurants</p>
                <div></div>
            </header>
            <div class="references">
                @forelse ($recipe->discovers as $item)
                    <iframe src="{{ $item->url }}" class="reference" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                @empty
                    <p>No discover available yet</p>
                @endforelse
            </div>
        </div>
    </div>
@endpush
