<h1>Tambah User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    Nama:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <button type="submit">Simpan</button>
</form>
