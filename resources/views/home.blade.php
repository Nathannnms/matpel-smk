<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<x-app>

    <div class="container">
        <h1>Daftar Buku</h1>

        <!-- Form Pencarian -->
        <form action="{{ route('home') }}" method="GET">
            <input type="text" name="search" placeholder="Cari berdasarkan ID/Kategori" value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Category</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Publisher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($allBook as $book)
                <tr>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->book_name }}</td>
                    <td>{{ number_format($book->price, 0, ',', '.') }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>
                        <a href="{{ route('book.show', $book->id) }}" class="button">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-app>
</body>
</html>
