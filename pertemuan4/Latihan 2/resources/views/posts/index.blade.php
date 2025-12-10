<h1>Daftar Post</h1>

<a href="{{ route('posts.create') }}">+ Tambah Post</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Judul</th>
        <th>Author</th>
        <th>Kategori</th>
        <th>Excerpt</th>
    </tr>

    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->author->name }}</td>
        <td>{{ $post->category->name }}</td>
        <td>{{ $post->excerpt }}</td>
    </tr>
    @endforeach
</table>
