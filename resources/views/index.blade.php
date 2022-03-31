

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL | COVID-19 Contact Tracing System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>

<style>
    .navbar-brand{
        padding:0px;
        font-size:15px !important;
        font-weight:600;
        color:white !important;
    }
    
    .mlgcl-fs{
        font-size:20px !important;
        font-weight:600;
        margin-bottom:-7px !important;
        color:white !important;
        
    }

</style>
</head>
<body>
@include('layouts.app')

    
<div class="container-fluid">

    <div class="row">
        <div class="col mt-5 ms-5">
            <div class="row ms-5">
                <div class="col">
                    <h2 class="display-6 fw-bold" style="font-weight:900;letter-spacing:2px;">Welcome to MLGCL COVID-19 Contact Tracing System!</h2>
                </div>
            </div>
            <div class="row ms-5 mt-4">
                 <div class="col">
                    <p >MLGCL COVID-19 Contact Tracing System is the MLGCL's unofficial contact tracing system.
We aim to manage the spread of COVID-19 to keep our students, instructors and staffs safe and healthy.</p>
                </div>
            </div>
            <div class="row ms-5">
                <div class="col">
                    <p class="fw-bold fs-5">I'd like to <span style="color:#0299eb;">login</span> as an</p>
                </div>
            </div>
            <div class="row ms-5 pt-2 pb-4">
                <div class="col">
                    <a href="{{url('/login')}}"><button class="btn btn fw-bold" style="background-color:#0299eb;color:white; border-radius:50px; padding:10px 45px;"><i class="fa solid fa-user me-2"></i>Individual</button></a>   
                    <a href="{{url('/login')}}"><button class="btn btn ms-4 fw-bold" style="background-color:#0299eb;color:white; border-radius:50px;  padding:10px 45px;"><i class="fa solid fa-database me-2"></i>Admin</button></a>   

                </div>
                
               
            </div>
            <div class="row ms-5">
                <div class="col">
                    <p>Don't have an account yet?  <a href="{{url('/register')}}" class="text-decoration-none fw-bold" style="color:#0299eb;">Register Now</a>   
</p>
                   
                </div>
             
            </div>
        </div>

        <div class="col">

            <div class="row">
                <div class="col">
                    <img src="image/doctor.gif"alt="Health Gif">
                </div>
            </div>

        </div>
    </div>
</div>

@include('footer')

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>