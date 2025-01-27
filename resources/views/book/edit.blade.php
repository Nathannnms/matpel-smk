<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<x-app>

    <div class="container">
        <h1>Edit Book Data</h1>
        <form action="{{ route('book.update', $book ->book_id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Book ID</label>
        <input type="text" name="book_id" id="" value="{{$book->book_id}}" required>
        <br>
        <label for="">Category</label>
        <input type="text" name="category" id="" value="{{$book->category}}" required>
        <br>
        <label for="">Book Name</label>
        <input type="text" name="book_name" id="" value="{{$book->book_name}}" required>
        <br>
        <label for="">Price</label>
        <input type="number" name="price" id="" value="{{$book->price}}" required>
        <br>
        <label for="">Stock</label>
        <input type="number" name="stock" id="" value="{{$book->stock}}" required>
        <br>
        <label for="">Publisher</label>
        <input type="text" name="publisher" id="" value="{{$book->publisher}}" required>
        <br>

        <button class="button" type="submit">Update</button>
    </div>
    </form>
    </div>

</x-app>
</body>
</html>
