<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Menu</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Today's Menu</h1>
        <a href="{{ route('menu.create') }}" class="add-dish">Add a New Dish</a>
        <div class="menu-grid">
            @foreach ($dishes as $dish)
                <div class="menu-item">
                    <h2>{{ $dish->dish_name }}</h2>
                    <p>{{ $dish->description }}</p>
                    <p class="price">₱{{ number_format($dish->price, 2) }}</p>
                    <p class="category">{{ $dish->category }}</p>
                    <div class="actions">
                        <a href="{{ route('menu.edit', $dish->id) }}" class="edit">Edit</a>
                        <form action="{{ route('menu.destroy', $dish->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>