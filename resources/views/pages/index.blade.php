<x-layouts.app>
    @foreach ($pages as $page)
        <img src="{{ asset('storage/' . $page->image?->url) }}">
    @endforeach
</x-layouts.app>