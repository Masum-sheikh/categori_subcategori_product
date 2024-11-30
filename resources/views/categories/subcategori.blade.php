<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub-Categories</title>
</head>
<body>
    <h1>Sub-Categories for {{ $category->name }}</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Sub-Category Name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->subCategories as $key => $subCategory)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $subCategory->name }}:{{ $subCategory->products_count }}</td>
                    <td><a href="{{ route('product', $subCategory->id) }}">show product</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
