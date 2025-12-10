<h1>Daftar Kategori</h1>

<a href="{{ route('categories.create') }}">+ Tambah Kategori</a>

<ul>
@foreach($categories as $category)
    <li>
        {{ $category->name }}

        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>

        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </li>
@endforeach
</ul>
