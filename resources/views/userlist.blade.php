

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL | COVID-19 Contact Tracing System Users List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
  
    .container{

        margin-top:8%;
        background-color:white;
        padding:10px;
    }
  
  .container-top{
      display:flex;
      padding-top:20px;
      padding-bottom:30px;
  }

  .btn{
      margin-left:15px;
     
  }
  .table{
      padding:10px;
  }
</style>
</head>
<body>

@include('navbar')



<div class="container">

    <div class="container-top">
<h2 >Users List </h2>
<button class="btn btn-primary px-4"><a href=" {{('register')}}" class="text-decoration-none text-light">Add New</a></button>
    </div>

<table class="table">
  <thead>

  <tr>
      <th scope="col">Photo</th>
      <th scope="col">User Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">User ID</th>
      <th scope="col">Operation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  
    <tr>
      <th scope="row">
        <img src="{{ asset('uploads/files/$user->profile_picture') }}" alt="{{$user->profile_picture}}">
     </th> 
      <td>{{$user->name}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->id}}</td>
      <td>
        <button class="btn btn-success">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
      <td>
        <button class="btn btn-primary"><a href=" {{('login?login_id=$user->id')}}" class="text-decoration-none text-light">Login</a> </button>
      </td>
     
    </tr>
  @endforeach
  </tbody>
</table>


</div>

    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>