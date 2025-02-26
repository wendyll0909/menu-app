<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dish</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Dish</h1>
        <form action="{{ route('menu.update', $dish->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="dish_name">Dish Name:</label>
            <input type="text" name="dish_name" value="{{ $dish->dish_name }}" required>
            <label for="description">Description:</label>
            <textarea name="description" required>{{ $dish->description }}</textarea>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" value="{{ $dish->price }}" required>
            <label for="category">Category:</label>
            <select name="category" required>
                <option value="Appetizer" {{ $dish->category == 'Appetizer' ? 'selected' : '' }}>Appetizer</option>
                <option value="Main Course" {{ $dish->category == 'Main Course' ? 'selected' : '' }}>Main Course</option>
                <option value="Dessert" {{ $dish->category == 'Dessert' ? 'selected' : '' }}>Dessert</option>
                <option value="Beverage" {{ $dish->category == 'Beverage' ? 'selected' : '' }}>Beverage</option>
            </select>
            <button type="submit">Update Dish</button>
        </form>
        <a href="{{ route('menu.index') }}" class="back-link">◄ Back to Menu</a>
    </div>
</body>
</html>