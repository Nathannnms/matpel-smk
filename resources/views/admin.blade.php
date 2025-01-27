<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<x-app>

    <div class="container">
        <h1>Manajemen Data Buku</h1>
        <a href="{{ route('book.create') }}" class="button">Add</a>
        <table>
            <thead>
                <tr>
                    <th>Book id</th>
                    <th>Category</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Publisher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($allBook as $key => $r)
                <tr>
                    <td>{{ $r->book_id}}</td>
                    <td>{{ $r->category}}</td>
                    <td>{{ $r->book_name }}</td>
                    <td>{{ number_format($r->price, 0, ',', '.') }}</td>
                    <td>{{ $r->stock}}</td>
                    <td>{{ $r->publisher}}</td>
                        <td>
                            <form action="{{ route('book.delete', $r->book_id)}}" method="POST">
                                <a href="{{ route('book.show', $r->book_id) }}" class="button">Detail</a>
                                <a href="{{ route('book.edit', $r->book_id) }}" class="button">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app>
</body>
</html>


