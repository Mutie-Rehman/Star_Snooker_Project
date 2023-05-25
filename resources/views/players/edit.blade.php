<!DOCTYPE html>
<html>
<head>
  <style>
    .card {
      margin: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
    }
  
    .card-header {
      background-color: #f5f5f5;
      font-weight: bold;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }
  
    .card-body {
      padding: 10px;
    }
  
    .form-control {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
  
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 4px;
      text-decoration: none;
      background-color: #f5f5f5;
      color: #333;
      border: 1px solid #ccc;
      cursor: pointer;
      font-size: 14px;
    }
  
    .btn-success {
      background-color: #28a745;
      color: #fff;
      border-color: #28a745;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
      <form action="{{ url('player/' . $players->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $players->id }}" >
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ $players->name }}" class="form-control"><br>
        <label for="address">Address</label><br>
        <input type="text" name="address" id="address" value="{{ $players->address }}" class="form-control"><br>
        <label for="mobile">Mobile</label><br>
        <input type="text" name="mobile" id="mobile" value="{{ $players->mobile }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
      </form>
    </div>
  </div>
</body>
</html>
