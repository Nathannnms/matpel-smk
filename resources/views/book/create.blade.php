<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<x-app>

    <div class="container">
        <h1>Add Book Data</h1>
        <form action="{{ route('book.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Book ID</label>
        <input type="text" name="book_id" id="" placeholder="Input Book ID" required>
        <br>
        <label for="">Category</label>
        <input type="text" name="category" id="" placeholder="Input Category" required>
        <br>
        <label for="">Book Name</label>
        <input type="text" name="book_name" id="" placeholder="Input Book Name" required>
        <br>
        <label for="">Price</label>
        <input type="number" name="price" id="" placeholder="Input Price" required>
        <br>
        <label for="">Stock</label>
        <input type="number" name="stock" id="" placeholder="Input Stock" required>
        <br>
        <label for="">Publisher</label>
        <input type="text" name="publisher" id="" placeholder="Input Publisher" required>
        <br>

        <button class="button" type="submit">Submit</button>
    </div>
    </form>
    </div>

</x-app>
</body>
</html>
