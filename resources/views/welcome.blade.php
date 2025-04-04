<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1> @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </h1>
    <form action="api/products" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <input type="text" name="name" value="" class="form-control" placeholder="Product Name">

        </div>
        <div class="form-group mb-3">
            <input type="text" name="description" value="" class="form-control" placeholder="desription"> 

        </div>
        <div class="form-group mb-3">
            <input type="text" name="price" value="" class="form-control" placeholder="price">
        </div>
        <div class="form-group mb-3">
            <input type="text" name="stock" value="" class="form-control" placeholder="stock">
            
        </div>
        <div class="form-group mb-3">

            <input type="file" name="image" value="" class="form-control">

        </div>
        <div class="form-group mb-3">

            <input type="submit" name="submit" value="submit" class="form-control">
        </div>
    </form>

</body>

</html>