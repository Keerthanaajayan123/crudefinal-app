<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container pt-5">
  <h2> Edit Categories </h2>
    <div class="row">
        <div class="col-sm-4">
            <form action="/category-update/{{$category->id}}" method="POST">
                @csrf
                <!-- @method('put') -->
                <label for="">Product Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                <label for="">Price</label>
                <input type="text" name="amount" value="{{$category->amount}}" class="form-control"/>
                <button type="submit" class="btn btn-info mt-4">Update</button>
            </form>

        </div>

    </div>
 
</div>

</body>
</html>
