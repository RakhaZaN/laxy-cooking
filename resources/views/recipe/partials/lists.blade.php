<div class="recipes-list">
    @forelse ($recipes as $item)
        <!-- single recipe -->
        <a href="{{ route('recipe', ['recipe' => $item->id]) }}" class="recipe">
            <img src="{{ $item->image }}" class="img recipe-img" alt="recipe {{ $item->name }} photo" />
            <h5>{{ $item->name }}</h5>
            <p>Prep : {{ $item->prep_time }} menit | Cook : {{ $item->cook_time }} menit</p>
        </a>
        <!-- end of single recipe -->
    @empty
        <p>No recipes available yet</p>
    @endforelse
</div>
