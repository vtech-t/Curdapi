<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-">
                <h1> @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </h1>
                <h1>Product List</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new
                    Product</button>
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <form action="{{ url('/products/delete/' . $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form> /  <a class="btn btn-primary" href="{{ url('/products/edit/' . $product->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="products" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" name="name" value="" class="form-control"
                                            placeholder="Product Name">

                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="description" value="" class="form-control"
                                            placeholder="desription">

                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="price" value="" class="form-control"
                                            placeholder="price">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="stock" value="" class="form-control"
                                            placeholder="stock">

                                    </div>
                                    <div class="form-group mb-3">

                                        <input type="file" name="image" value="" class="form-control">

                                    </div>
                                    <div class="form-group mb-3">

                                        <input type="submit" name="submit" value="submit" class="form-control">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>