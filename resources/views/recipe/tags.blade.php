@extends('layouts.app')

@section('page-title')
    Tags | Lazy Cooking
@endsection

@section('contents')
    <section class="tags-wrapper">
        @forelse ($tags as $item)
            <!-- single tag -->
            <a href="{{ route('tag', [$item->tag]) }}" class="tag">
                <h5>{{ $item->tag }}</h5>
                <p>{{ $item->recipes_count }} recipes</p>
            </a>
            <!-- end of single tag -->
        @empty
            <p>No tags available yet</p>
        @endforelse
    </section>
@endsection
