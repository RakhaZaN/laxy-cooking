@extends('layouts.app')

@section('page-title')
    Payment | Lazy Cooking
@endsection

@push('add-css')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

@section('contents')
    <div class="container">
        <form action="{{ route('payment.transaction', ['recipe' => $recipe]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" name="fullname" id="fullname" placeholder="Hunan Aldi" />
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" value="{{ Auth::user()->email }}" disabled />
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" name="address" id="address" placeholder="room - street - locality" />
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" name="city" id="city" placeholder="Jakarta" />
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" name="state" id="state" placeholder="Indonesia" />
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" name="zip_code" id="zip_code" placeholder="60229" />
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="{{ asset('img/card_img.png') }}" alt="" />
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" name="name_on_card" id="noc" placeholder="Hunan Aldi" />
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" name="cc_number" id="cc_number" placeholder="1111-2222-3333-4444" />
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" name="exp_month" id="exp_month" placeholder="january" />
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" name="exp_year" id="exp_year" placeholder="2022" />
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" name="cvv" id="cvv" placeholder="123" />
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" value="proceed to checkout" class="submit-btn" />
        </form>
    </div>
@endsection
