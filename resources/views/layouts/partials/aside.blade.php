<!-- tag container -->
<aside class="tags-container">
    <h4>Recipes</h4>
    <div class="tags-list">
        @forelse ($tags as $item)
            <a href="{{ route('tag', [$item->tag]) }}">{{ $item->tag }} ({{ $item->recipes_count }})</a>
        @empty
            <p>No tags available yet</p>
        @endforelse
    </div>
</aside>
<!-- end of tag container -->
