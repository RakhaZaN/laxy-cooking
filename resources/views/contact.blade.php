@extends('layouts.app')

@section('page-title')
    Contact | Lazy Cooking
@endsection

@section('contents')
    <section class="contact-container">
        <article class="contact-info">
            <h3>Want To Get In Touch?</h3>
            <p>
                Jika Anda memiliki pertanyaan, saran, atau umpan balik mengenai konten yang
                disediakan, kami sangat senang untuk mendengarnya.
            </p>
            <p>Silahkan isi formulir yang tersedia di halaman ini untuk menghubungi kami.</p>
            <p>
                Kami akan berusaha untuk merespon setiap pesan yang kami terima secepat mungkin.
                Terima kasih atas kunjungan Anda!
            </p>
        </article>
        <article>

            <form action="{{ route('contact.feedback') }}" method="POST" class="form contact-form">
                @csrf
                <div class="form-row">
                    <label html="name" class="form-label">your name</label>
                    <input type="text" name="name" id="name" class="form-input" />
                </div>
                <div class="form-row">
                    <label html="email" class="form-label">your email</label>
                    <input type="text" name="email" id="email" class="form-input" />
                </div>
                <div class="form-row">
                    <label html="message" class="form-label">message</label>
                    <textarea name="message" id="message" class="form-textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-block">
                    submit
                </button>
            </form>
        </article>
    </section>

    <!-- featured recipes -->
    <section class="featured-recipes">
        <h5 class="featured-title">Resep terpopuler</h5>
        @include('recipe.partials.lists')
    </section>
@endsection
