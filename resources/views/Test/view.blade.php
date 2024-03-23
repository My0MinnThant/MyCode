<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
   <div class="container">
   <h1> &raquo Student Detail &laquo </h1>
   <table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Department</td>
        <td>Phone Number</td>

    </tr>

    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->department }}</td>
        <td>{{ $student->phone_number }}</td>
    </tr>

   </table>

   <a href="{{ route('test.index')}}" >Back to Home</a>


   </div>
</body>
</html>