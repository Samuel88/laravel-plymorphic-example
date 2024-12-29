<x-layouts.app>
    <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <label for="content">Content</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" value="{{ old('image') }}">
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