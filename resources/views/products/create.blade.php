<x-layouts.app>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}">
        <label for="images[]">Image</label>
        <input type="file" multiple name="images[]" id="images[]" value="{{ old('images[]') }}">
        <input type="submit" value="Insert">
        <div>
            @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </form>
</x-layouts.app>