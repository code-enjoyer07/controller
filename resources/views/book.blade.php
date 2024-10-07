<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <div class="containe">
        <h1>{{ $title }}</h1>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Nama Buku</th>
                    <th>Penerbit Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis Buku</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->kode_buku }}</td>
                        <td>{{ $book->nama_buku }}</td>
                        <td>{{ $book->penerbit_buku }}</td>
                        <td>{{ $book->tahun_terbit }}</td>
                        <td>{{ $book->penulis_buku }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="/books/form">Tambah Buku</a>
    </div>
</body>
</html>

