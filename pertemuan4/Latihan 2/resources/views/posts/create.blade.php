<h1>Create Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <label>Judsul:</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title')<div style="color:red">{{ $message }}</div>@enderror
    <br><br>

    <label>Excerpt:</label>
    <textarea name="excerpt">{{ old('excerpt') }}</textarea>
    @error('excerpt')<div style="color:red">{{ $message }}</div>@enderror
    <br><br>

    <label>Konten / Body:</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @error('body')<div style="color:red">{{ $message }}</div>@enderror
    <br><br>

    <label>Kategori:</label>
    <select name="category_id">
        <option value="">-- pilih kateogori --</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    @error('category_id')<div style="color:red">{{ $message }}</div>@enderror
    <br><br>

    <label>Author:</label>
    <select name="user_id">
        <option value="">-- pilih author --</option>
        @foreach($authors as $auth)
            <option value="{{ $auth->id }}">{{ $auth->name }}</option>
        @endforeach
    </select>
    @error('user_id')<div style="color:red">{{ $message }}</div>@enderror
    <br><br>

    <button type="submit">Simpan</button>
</form>
