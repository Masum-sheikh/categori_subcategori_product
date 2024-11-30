<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>
    <h1>Category List</h1>

    <!-- Add New Category Button -->


    <!-- Categories Table -->
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}:{{ $category->sub_categories_count }}</td>
                    <td><a href="{{ route('subcategori', $category->id) }}">show subcategori</a></td>
               </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
