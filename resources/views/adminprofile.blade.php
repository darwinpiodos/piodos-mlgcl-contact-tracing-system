

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL | Admin Profile | COVID-19 Contact Tracing System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

@extends('layouts.app')

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

.image-container{
    background-image:url("storage/avatars/{{ Auth::user()->id }}/{{ Auth::user()->profile_picture }}");
    /* background-image:url("image/darwin-blue.png"); */
    background-repeat:no-repeat;
    background-position: center center;
    background-size:cover;
    
}

/* <img src="storage/avatars/{{ Auth::user()->id }}/{{ Auth::user()->profile_picture }}" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> */


#small-profile{
    background-image:url("storage/avatars/{{ Auth::user()->id }}/{{ Auth::user()->profile_picture }}");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}

    
</style>
</head>
<body>



@extends('layouts.app')

<div class="container-fluid">

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

            <a href="{{url('adminprofile')}}" class="links-profile navs-item text-decoration-none" style="background-color:whitesmoke; color:#47494a"><div class=" bg-profile ms-3"><i class="fa solid fa-user icon-right"></i>Profile</div></a>

            <a href="{{url('adminsettings')}}" class="links-profile navs-item text-decoration-none"><div class=" bg-settings"><i class="fa solid fa-wrench icon-right ms-3"></i>Settings</div></a>

            <a href="{{url('adminlist')}}" class="links-profile navs-item text-decoration-none"><div class=" bg-list"> <i class="fa solid fa-database icon-right ms-3"></i>User List</div></a>

            </div>



        </div>


        <!-- <div class="col-10 bg-light py-3" style="position:absolute;right:0px; box-shadow:0px 0px 4px #cfcfcf">
         -->


         
        <div class="col-10"style="position:absolute;right:0px;">

            <div class="row bg-light py-4 px-3" style="box-shadow:0px 0px 4px #cfcfcf;z-index:1; background-color:white;" >

                <div class="col"  >
                    
                    <div class="row" style="z-index:100; background-color:;">


                        <div class="col">
                            Profile
                        </div>

                        <div class="col d-flex" style="justify-content:flex-end;">
                            
                            <div class="icon"><i class="fa solid fa-bell"></i>
                            </div>

                                <div class="border-left" style="margin-left:10px;"></div>
                                <div class="username" style="margin-left:10px;"> {{ Auth::user()->name }}</div>

                                <div class="user profilephoto" style="width:30px;height:30px;background-color:whitesmoke;margin-left:10px; border-radius:50%; " id="small-profile">
                                    <!-- <img src="image/darwin-piodos.jpg" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> -->
                                </div>
                        </div>
                        

                    </div>

                </div>

            </div>


            <div class="row bg-light m-4 p-2 d-flex align-items-center justify-content-center" style="box-shadow:0px 0px 10px #cfcfcf;font-size:14px;">
                <div class="col m-2" style="color:#028ade">
                    <p style="color:#3d4042;font-size:20px;font-weight:bold;">Admin Information</p>

                   <div class="card">
                       <div class="card-header pt-3 pb-3">
                           <button class="btn btn-outline-secondary me-2">See More</button>
                           <button class="btn btn-outline-secondary">Edit Profile</button>
                       </div>
                       <div class="card-body"style="color:#2e2e2e;">

                            <div class="row">
                                <div class="col-lg-4">
                                    
                                    <div class="image-container ms-" style="width:120px;height:120px;  ">
                                   
                                    </div>

                                    <div class="col">
                                        <p style="font-size:20px; font-weight:600; margin-top:3%;"> {{ Auth::user()->name }}
                                    
                                        <!-- <img src="storage/avatars/28/darwin.jpeg" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> -->

                                        <!-- <img src="storage/avatars/{{ Auth::user()->id }}/{{ Auth::user()->profile_picture }}" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> -->


                                        <!-- <img src="{{ asset('avatars/24/' . Auth::user()->name) }}"> -->

                                        <!-- <img src="{{ asset('app/avatars/25/') }}/{{  Auth::user()->profile_picture }}" class="" /> -->
                                        
                                         <!-- <img src="image/darwin-piodos.jpg" width="30px" class="darwin-piodos" style="border-radius:50%; margin-left:10px;"> -->

                                         <!-- <img src="{{ asset('storage/download.jpg') }}"> -->

                                         <!-- <img src="" alt=""> -->
                                           

                                       <!-- <img src="storage/app/avatars/24/download.jpg" alt=""> -->

                                       <!-- <img src="echo asset('storage/download.jpg');" alt="" srcset="">
                                          -->
                                        

                                    </p>
                                        <p class="m-0 p-0"><i class="fa solid fa-map me-2"></i> {{ Auth::user()->c_address }}</p>
                                        <p class="m-0 p-0 "><i class="fa solid fa-phone me-2"></i> {{ Auth::user()->phone }}</p>
                                        <p class="m-0 p-0 "><i class="fa solid fa-envelope me-2"></i> {{ Auth::user()->email }}</p>
                                    </div>
                                   

                                </div>


                                <div class="col-lg-8">

                                    <div class="card">
                                        <div class="card-header">
                                            <p><a href="#" class=" text-secondary  text-decoration-none fw-bold fs-5"><i class="fa solid fa-address-card"></i></a>
                                                   
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p class="fw-bold">Birthday:</p>
                                                    <p class="fw-bold">Gender:</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>{{ Auth::user()->dmonth }}
                                                        <span> </span>
                                                    {{ Auth::user()->dday}}
                                                    <span>,</span>
                                                    {{ Auth::user()->dyear }}
                                                    </p>
                                                    <p> {{ Auth::user()->gender }}</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p class="fw-bold">Current Address:</p>
                                                    <p class="fw-bold">Mobile (Secondary):</p>
                                                </div>
                                                <div class="col">
                                                    <p>{{ Auth::user()->barangay }}
                                                        <span>, </span>
                                                    {{ Auth::user()->city_municipality}}
                                                    <span>,</span>
                                                    {{ Auth::user()->province }}
                                                    </p>
                                                    </p>
                                                    <p>{{ Auth::user()->secondaryphone }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                       </div-card-body>
                   </div>


                    

                    
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