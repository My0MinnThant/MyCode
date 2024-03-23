<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    <div class="container">
    <h1>&raquo Edit Form &laquo</h1>
    <form action=" {{route ('update-student', $data->id)}}"  method="POST">
        @csrf
        @method('PUT')
        
    <div class="form-group">
        <label>Name</label>
        <input type="name" name='name' class="form-control" value="{{ $data['name']}}">
    </div>
    <br>
    <div class="form-group">
        <label>Address</label>
        <input type="address" name="address" class="form-control" value="{{ $data['address']}}">
    </div>
    <br>
    <div class="form-group">
        <label>Department</label>
        <input type="department" name="department" class="form-control" value="{{ $data['department']}}">
    </div>
    <br>
    <div class="form-group">
        <label>Phone Number</label>
        <input type="phone_number" name="phone_number" class="form-control" value="{{ $data['phone_number']}}">
    </div>
    <br>
    <input type="submit" value="Update Student" class="btn btn-primary">


    </form>
   
    </div>
</body>
</html>