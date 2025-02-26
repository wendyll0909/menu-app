<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Add a New Dish</h1>
        <form action="{{ route('menu.store') }}" method="POST">
            @csrf
            <label for="dish_name">Dish Name:</label>
            <input type="text" name="dish_name" required>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" required>
            <label for="category">Category:</label>
            <select name="category" required>
                <option value="Appetizer">Appetizer</option>
                <option value="Main Course">Main Course</option>
                <option value="Dessert">Dessert</option>
                <option value="Beverage">Beverage</option>
            </select>
            <button type="submit">Add Dish</button>
        </form>
        <a href="{{ route('menu.index') }}" class="back-link">◄ Back to Menu</a>
    </div>
</body>
</html>