<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Edit Item</h1>
    <form method="post" action="{{ route('items.update', $item) }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" required>{{ $item->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" name="image" value="{{ $item->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- Add Bootstrap JS (Optional, but required for some Bootstrap features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

