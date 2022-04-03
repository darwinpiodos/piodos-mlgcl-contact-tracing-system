

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL | Admin List | COVID-19 Contact Tracing System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<style>
    body{
        background-color:#eee;
        font-family: 'Poppins', sans-serif;
    }
    
    .links-profile{
        text-decoration:none;
        color:whitesmoke;
        transition:0.1s ease-in-out;
        padding: 10px 20px;
        /* background-color:white;
        */
    }
    .links-profile:hover{
      
        color:#47494a;
    }

    .navs-item{
      
      padding:10px 30px;
      transition:0.1s ease-in-out;
      
     
  }
  .navs-item:hover{
    
  
    background-color:whitesmoke;
}

.icon-right{

    margin-right:15px;
}

#small-profile{
    background-image:url("image/darwin-piodos.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    
}

    
</style>
</head>
<body>

@extends('layouts.app')

<div class="container-fluid bg-secondary">

    <div class="row">

        <div class="col-2" style="height:100%; color:white; position:fixed;
         box-shadow:0px 1px 10px gray;z-index:2; background-color:#028ade;">
            
            <div class="row mt-2 mb-2">

                <div class="col d-flex mt-3 fw-bold align-items-center">
                    <div><img src="image/mlg-logo.png" alt="mlg logo" width="35px"></div>

                    <div class="col">
                    <div class="ms-2">MLGCL</div>
                    <div class="ms-2" style="font-size:12px;">COVID-19 CONTACT TRACING SYSTEM</div>

                    </div>
                </div>

                

            </div>


            <div class="row">
                <div class="col">
                    <hr>
                </div>

            </div>

            <div class="row">

            <a href="{{url('admindashboard')}}" class="links-profile navs-item links-dashboard text-decoration-none"><div class=" bg-dash"><i class="fa brands fa-windows icon-right ms-3"></i>Dashboard</div></a>

            <a href="{{url('adminprofile')}}" class="links-profile navs-item text-decoration-none"><div class=" bg-profile"><i class="fa solid fa-user icon-right  ms-3"></i>Profile</div></a>

            <a href="{{url('adminsettings')}}" class="links-profile navs-item text-decoration-none"><div class=" bg-settings"><i class="fa solid fa-wrench icon-right  ms-3"></i>Settings</div></a>

            <a href="{{url('adminlist')}}" class="links-profile navs-item text-decoration-none" style="background-color:whitesmoke; color:#47494a"><div class=" bg-list"> <i class="fa solid fa-database icon-right ms-3"></i>User List</div></a>

            </div>



        </div>


        <!-- <div class="col-10 bg-light py-3" style="position:absolute;right:0px; box-shadow:0px 0px 4px #cfcfcf">
         -->
        <div class="col-10 "style="position:absolute;right:0px;">

            <div class="row bg-light py-4 px-3" style="box-shadow:0px 0px 4px #cfcfcf">

                <div class="col">
                    
                    <div class="row">


                        <div class="col">
                            Database
                        </div>

                        <div class="col d-flex" style="justify-content:flex-end;">
                            
                            <div class="icon"><i class="fa solid fa-bell"></i></div>
                                <div class="border-left" style="margin-left:10px;"> | </div>
                                <div class="username" style="margin-left:10px;">{{ Auth::user()->name }}</div>
                                <div class="user profilephoto" style="width:30px;height:30px;background-color:whitesmoke;margin-left:10px; border-radius:50%; " id="small-profile">
                                    <!-- <img src="image/darwin-piodos.jpg" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> -->
                                </div>
                            </div>
                        

                    </div>

                </div>

            </div>


            <div class="row bg-light m-4" style="box-shadow:0px 0px 10px #cfcfcf;font-size:14px;" >
                <div class="col m-2" style="color:#028ade"  >
                      <p style="color:#3d4042;font-size:20px;font-weight:bold; margin-left:10px;margin-top:10px;">Master List <a href="{{('register')}}"><button class="btn btn-outline-secondary ms-4" style="font-size:14px;"><i class="fa solid fa-plus me-2"></i>Add New</button></a></p>

  
                  
                    <table class="table" style="   display: block;
    overflow-x: auto; overflow-y: auto;
    white-space: nowrap; cellpadding:0; cellspacing:0; height:50%; padding:10px;">
  <thead>

  <tr>
      <th >User ID</th>
      <th >Photo</th>
      <th >Name</th>
      <th >Email</th>
      <th >Mobile Number</th>
      <th >Secondary Mobile Number</th>
      <th >Gender</th>
      <th >Date of Birth</th>
      <th >Address</th>
      <th >Zip Code</th>
      <th >Current Address</th>
      <th >Operation</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($users as $user)
 
    <tr>

      <th scope="row">{{$user->id}}</th> 
      <td>
        <img src="{{ asset('uploads/files/$user->profile_picture') }}" alt="{{$user->profile_picture}}">
      </td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->secondaryphone}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->dmonth}}<span> </span>{{$user->dday}}<span>, </span>{{$user->dyear}}</td>
      <td>{{$user->barangay}}<span>, </span>{{$user->city_municipality}}<span>, </span>{{$user->province}}</td>
      <td>{{$user->zipcode}}</td>
      <td>{{$user->c_address}}</td>

      <td>
     <button class="btn btn-info me-2" style="font-size:12px;"> <i class="fa solid fa-pen  me-2"></i>Edit</button>
        <button class="btn btn-danger " style="font-size:12px;"><i class="fa solid fa-trash  me-2"></i>Delete</button>
      </td>
      <td>
        <!-- <button class="btn btn-primary"><a href="{{$user->id}}" class="text-decoration-none text-light">Login</a> </button> -->

        <button class="btn btn-primary" style="font-size:12px;"s><a href="{{ URL::to('adminprofile/'.$user->id) }}" class="text-decoration-none text-light"><i class="fa solid fa-unlock me-2"></i>Login</a> </button>


        

      </td>
     
    </tr>
  @endforeach
  </tbody>
</table>



                    

                </div>
            </div>


        </div>

    </div>

</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>


</body>
</html>