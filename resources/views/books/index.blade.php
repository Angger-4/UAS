<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f8f9fa; }
        .container { max-width: 900px; margin: 40px auto; background: #fff; padding: 32px 40px 40px 40px; border-radius: 12px; box-shadow: 0 2px 12px #0001; }
        h2 { text-align: center; margin-bottom: 32px; font-size: 2.2em; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 32px; }
        th, td { border: 1px solid #e0e0e0; padding: 12px 16px; text-align: left; }
        th { background: #f2f2f2; font-size: 1.1em; }
        tr:nth-child(even) { background: #fafafa; }
        .success { color: #218838; background: #d4edda; border: 1px solid #c3e6cb; padding: 10px 16px; border-radius: 6px; margin-bottom: 18px; text-align: center; }
        form { margin-top: 0; }
        .form-group { margin-bottom: 14px; }
        label { display: inline-block; width: 80px; font-weight: bold; }
        input[type="text"], input[type="number"] { padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px; }
        button, input[type="submit"] { background: #007bff; color: #fff; border: none; padding: 8px 18px; border-radius: 4px; cursor: pointer; font-size: 1em; transition: background 0.2s; }
        button:hover, input[type="submit"]:hover { background: #0056b3; }
        .delete-btn { background: #dc3545; margin-left: 0; }
        .delete-btn:hover { background: #a71d2a; }
        h3 { margin-top: 36px; margin-bottom: 18px; }
        @media (max-width: 600px) {
            .container { padding: 10px; }
            input[type="text"], input[type="number"] { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Buku</h2>
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td style="text-align:center;">
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Tambah Buku Baru</h3>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Judul:</label>
                <input type="text" name="title" required>
            </div>
            <div class="form-group">
                <label>Penulis:</label>
                <input type="text" name="author" required>
            </div>
            <div class="form-group">
                <label>Tahun:</label>
                <input type="number" name="year" required maxlength="4">
            </div>
            <input type="submit" value="Tambah Buku">
        </form>
    </div>
</body>
</html> 