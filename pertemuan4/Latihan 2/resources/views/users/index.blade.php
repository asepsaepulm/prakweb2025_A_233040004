<h1>Daftar User</h1>

<a href="{{ route('users.create') }}">Tambah User</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Hapus user ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
