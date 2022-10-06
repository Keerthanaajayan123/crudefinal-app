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
  <h2>Categories List Display </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Product Name</th>
        <th>Price</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($data as $dat)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$dat->name}}</td>
        <td>{{$dat->amount}}</td>
      
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
