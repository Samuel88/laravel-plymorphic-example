<x-layouts.app>
    @foreach ($products as $product)
        <h3>{{ $product->name }}</h3>
        <h4>{{ $product->price }}</h4>
        @if($product->images)
            @foreach ($product->images as $image)
                <img src="{{ $image->url }}" alt="">
            @endforeach
        @endif
    @endforeach
</x-layouts.app>