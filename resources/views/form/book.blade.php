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
    <div class="container">
        <h1>{{ $title }}</h1>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <form action="/books/store" method="post">
            @csrf
            <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input type="text" id="kode_buku" name="kode_buku" value="{{ old('kode_buku') }}" placeholder="Masukkan kode buku">
                @error('kode_buku')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_buku">Nama Buku</label>
                <input type="text" id="nama_buku" name="nama_buku" value="{{ old('nama_buku') }}" placeholder="Masukkan nama buku">
                @error('nama_buku')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="penerbit_buku">Penerbit Buku</label>
                <input type="text" id="penerbit_buku" name="penerbit_buku" value="{{ old('penerbit_buku') }}" placeholder="Masukkan penerbit buku">
                @error('penerbit_buku')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}" placeholder="Masukkan tahun terbit">
                @error('tahun_terbit')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="penulis_buku">Penulis Buku</label>
                <input type="text" id="penulis_buku" name="penulis_buku" value="{{ old('penulis_buku') }}" placeholder="Masukkan penulis buku">
                @error('penulis_buku')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</body>
</html>

