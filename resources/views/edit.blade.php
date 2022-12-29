<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First CRUD</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Create Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products">View Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create-category">Create Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category">View Category</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="/update/{{$product->id}}" method="POST">
            @csrf
            @method('PATCH')
            <h1 class="text-center mb-4">Edit Product</h1>
             <div class="form-group">
                <label for="">Product Name</label>
            <input value="{{$product->product_name}}" type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
                <label for="">Price</label>
            <input value="{{$product->price}}" type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
            <input value="{{$product->stock}}" type="number" class="form-control" name="stock">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>