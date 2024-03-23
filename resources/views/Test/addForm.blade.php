<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Form</title>
</head>
<body>
    <div class="container">
 
    <h1>Add Student Form</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action=" {{route ('add-student')}}"  method="POST">
        @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="name" name='name' class="form-control" placeholder="Enter Your Name">
    </div>
    <br>
    <div class="form-group">
        <label>Address</label>
        <input type="address" name="address" class="form-control" placeholder="Enter Your Address">
    </div>
    <br>
    <div class="form-group">
        <label>Department</label>
        <input type="department" name="department" class="form-control" placeholder="Enter Your department">
    </div>
    <br>
    <div class="form-group">
        <label>Phone Number</label>
        <input type="phone_number" name="phone_number" class="form-control" placeholder="Enter Your Phone Number">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-select" name="category_id">
            @foreach($categories as $cate)
            <option value="{{$cate['id']}}">
            {{$cate['title']}}
            </option>
            @endforeach
        </select>
    </div>
    <br>
    <input type="submit" value="Add Student" class="btn btn-primary">


    </form>
   


</body>
</html>