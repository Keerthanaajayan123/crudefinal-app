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
  <h2>Categories <a class="btn btn-info" href="/category-create">Create New Category</a></h2>
  @if(session()->has('success'))
  <div class="alert alert-info" role="alert">
    <strong>{{session()->get('success')}}</strong>
  </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->amount}}</td>
        <td>
        <a href="/category-edit/{{$category->id}}" type="button" class="btn btn-space btn-primary">Edit</a>
        <a href="/category-display" type="button" class="btn btn-space btn-success">Display</a>
        <!-- <a href="/category-delete/{{$category->id}}" type="button" class="btn btn-danger">Delete</a> -->
        <form action="/category-delete/{{$category->id}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-sm btn-space btn-danger">Delete</button>
        </form>
      </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
