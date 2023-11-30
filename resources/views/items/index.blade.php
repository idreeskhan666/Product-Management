<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add your CSS styles or include a stylesheet here -->
</head>
<body>

    <div class="container mt-4">

        <h1>Items</h1>

        <a class="btn btn-primary mb-2" href="{{ route('items.create') }}">Create Item</a>

        <ul class="list-group">
            @foreach ($items as $item)
                <li class="list-group-item">
                    <strong>{{ $item->name }}</strong> - {{ $item->description }}
                    <a class="btn btn-warning btn-sm ml-2" href="{{ route('items.edit', $item) }}">Edit</a>

                    <form method="post" action="{{ route('items.destroy', $item) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm ml-2" type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

    </div>

    <!-- Add Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Add your JavaScript scripts or include a script file here -->

</body>
</html>


