<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul:</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    @error('title')
        <small style="color:red">{{ $message }}</small>
    @enderror
    <br>

    <label>Konten:</label>
    <textarea name="content">{{ old('content', $post->content) }}</textarea>
    @error('content')
        <small style="color:red">{{ $message }}</small>
    @enderror
    <br>

    <label>Kategori:</label>
    <select name="category_id">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ old('category_id', $post->category_id) == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <small style="color:red">{{ $message }}</small>
    @enderror
    <br>

    <label>Author:</label>
    <select name="author_id">
        @foreach($authors as $auth)
            <option value="{{ $auth->id }}"
                {{ old('author_id', $post->author_id) == $auth->id ? 'selected' : '' }}>
                {{ $auth->name }}
            </option>
        @endforeach
    </select>
    @error('author_id')
        <small style="color:red">{{ $message }}</small>
    @enderror
    <br><br>

    <button type="submit">Update</button>
</form>
