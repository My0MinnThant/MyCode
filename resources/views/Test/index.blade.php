<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lists</title>
</head>
<body>

    <div class="container-lg">
    <h1> &raquo Student Lists &laquo</h1>

    @if(session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
    @endif

  @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif

    @if(session('info'))
    <div class="alert alert-success">
      {{ session('info')}}
    </div>
    @endif

    
  
    <table class="table">
  <thead>
    <tr>
     
      <th scope="col" class="text-center">ID</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">Address</th>
      <th scope="col" class="text-center">Phone Number</th>
      <th scope="col" class="text-center">Department</th>
      <th scope="col" class="text-end">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($ddd as $test)
    <tr >
      <td>{{ $test['id']}}</td>
      <td>{{ $test['name']}}</td>
      <td>{{ $test['address']}}</td>
      <td>{{ $test['department']}}</td>
      <td>{{ $test['phone_number']}}</td>
      <td><a class="btn btn-primary" href="{{ route('view-student', $test->id)}}"  role="button">View</a></td>
      <td><a class="btn btn-success" href="{{ route('edit-student', $test->id) }}" role="button">Edit</a></td>
      <td><a class="btn btn-danger" href="{{ route('delete', $test->id) }}" role="button">Delete</a></td>
      
    </tr>
  @endforeach

  </tbody>
</table>

    

  


<a href="{{ route('student')}}" id="" <button type ="button" class = "btn btn-primary"  >Add Student</a>
<br>
<br>
<div class="row">
        <div class="col-md-3 mx-auto text-center">
        {{ $ddd->links() }}
        </div>
    </div>

</div>


</body>
</html>