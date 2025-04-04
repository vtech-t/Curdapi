<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Edit Product</h1>

  
        <form action="{{ url('/products/update/' . $product->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                            placeholder="Product Name">

                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="description" value="{{ $product->description }}" class="form-control"
                                            placeholder="desription">

                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                            placeholder="price">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="stock" value="{{ $product->stock }}" class="form-control"
                                            placeholder="stock">

                                    </div>
                                   
                                    <div class="form-group mb-3">

                                        <input type="submit" name="submit" value="submit" class="form-control">
                                    </div>
                                </form>
        </div>
    </div>
</div>
   
</body>
</html>
