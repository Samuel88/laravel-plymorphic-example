<x-layouts.app>
    @foreach ($pages as $page)
        <h1>{{ $page->title }}</h1>
        <p>{{ $page->content }}</p>
        @if($page->image)
            <img src="{{ $page->image->url }}">
        @endif
    @endforeach
</x-layouts.app>