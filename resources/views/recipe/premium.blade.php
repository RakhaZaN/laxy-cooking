@extends('layouts.app')

@section('page-title')
    Premium | Lazy Cooking
@endsection

@push('add-css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('contents')
    <div class="main">
        <h1>Buy our premium recipe in here!</h1>
        <h1>Includes 5+ premium recipes and step by step video tutorial</h1>

        <div class="box">
            @forelse ($premium_recipes as $idx => $item)
                <div class="card" data-name="c_{{ $idx + 1 }}">
                    <div class="image">
                        <img src="{{ $item->image }}" height="180px">
                    </div>
                    <div class="text">
                        <h2>{{ $item->name }}</h2>
                        <p class="price">Rp{{ number_format($item->price) }}</p>
                        <div class="button">
                            @auth
                                @if ($item->status)
                                    <p class="">Already buyed</p>
                                @else
                                    <a href="{{ route('payment', ['recipe' => $item->id]) }}" class="buy">
                                        <h5>Buy</h5>
                                    </a>
                                @endif
                            @endauth
                            @guest
                                <a href="{{ route('auth.view', ['type' => 'login']) }}" class="buy">
                                    <h5>Login to Buy</h5>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            @empty
                <p>No premium recipe available yet</p>
            @endforelse
        </div>
    </div>
@endsection
