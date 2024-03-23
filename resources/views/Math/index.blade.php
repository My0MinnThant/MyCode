<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Math Controller</h1>

        <form method="POST" action="{{ route('add-student')}}">
            @csrf
        <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        </div>
        <label for="name">Address</label>
        <input type="text" class="form-control" id="address" name="address">
        <br>
        <label for="name">Department</label>
        <input type="text" class="form-control" id="department" name="department">
        <br>
        <label for="name">Phone Number</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
        <br>
        <button type="submit" class="btn btn-primary">Add Student</button>
        </div>
        </form>
        
    </div>
</body>
</html>