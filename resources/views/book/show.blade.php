<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .book-detail {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .book-detail h2 {
            margin-bottom: 10px;
        }
        .book-detail p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<x-app>

    <div class="container">
        <h1>Detail Buku</h1>
        <div class="book-detail">
            <h2>{{ $book->book_name }}</h2>
            <p><strong>Book ID:</strong> {{ $book->book_id }}</p>
            <p><strong>Kategori:</strong> {{ $book->category }}</p>
            <p><strong>Harga:</strong> {{ number_format($book->price, 0, ',', '.') }}</p>
            <p><strong>Stok:</strong> {{ $book->stock }}</p>
            <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
        </div>
    </div>

</x-app>
</body>
</html>