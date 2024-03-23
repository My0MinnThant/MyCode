<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
</head>
<body>

    <div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('info'))
    <div class="alert alert-success">
      {{ session('info')}}
    </div>
    @endif

        <h1>Category Form</h1>
        <br>
    <form action=" {{route ('category')}}"  method="POST">
        @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name='title' class="form-control" placeholder="Enter Your Name">
    </div>
    <br>
    <input type="submit" value="Add Category" class="btn btn-primary">
</form>
    </div>
    
</body>
</html>