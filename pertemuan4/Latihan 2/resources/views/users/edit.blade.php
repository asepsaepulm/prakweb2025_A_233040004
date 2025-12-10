<h1>Edits User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama:
    <input type="text" name="name" value="{{ $user->name }}" required><br><br>

    Email:
    <input type="email" name="email" value="{{ $user->email }}" required><br><br>

    Password (kosongkan jika tidak ganti):
    <input type="password" name="password"><br><br>

    <button type="submit">Update</button>
</form>
