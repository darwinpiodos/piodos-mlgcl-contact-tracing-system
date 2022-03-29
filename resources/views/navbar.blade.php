<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL COVID-19 Contact Tracing System | Navigation Bar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    
    .mlg-logo{
        width:50px;
    }
    .logo-container{
        display:flex;
        align-items:center;
    }
    .logo-text{
        display:flex;
        flex-direction:column;
        margin-left:15px;

    }
    
     .logo-text .navbar-brand{
     
        color:white;
    }
    .logo-text .navbar-brand:hover{
     
     color:whitesmoke;
 }
    .navbar-brand{
        padding:0px;
        font-size:18px;
    }
    
    .mlgcl-fs{
        font-size:30px;
        
    }
  .links-right{
      color:white;
      text-decoration:none;
      font-size:18px;
      margin-left:20px;
  }
  .links-right:hover{
      color:whitesmoke;
  }
  .navbar-nav{
      position:absolute;
      right:30px;
  }
  .back-color{
      background-color:#0d6efd;
  }
  .navbar{
      /* box-shadow:1px 1px 5px gray; */
  }
   
   body{
       background-color:whitesmoke;
   }
</style>
</head>
<body>
    

<div class="container-fluid px-0">


        <nav class="navbar navbar-expand-lg navbar-light  my-0 back-color">
        <div class="container-fluid">

            <div class="logo-container">
                <a href="#">
                    <img src="image/mlg-logo.png" class="mlg-logo">
                </a>
                <div class="logo-text">

                    <a class="navbar-brand mlgcl-fs" href="#">MLGCL</a>
                    <a class="navbar-brand" href="#">COVID-19 CONTACT TRACING SYSTEM</a>

                </div>

            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">


            @if (Route::has('login'))
            <ul class="navbar-nav">

                @auth
                <li class="nav-item">
                                <a href="{{ url('/home') }}" class="links-right">Home</a>
                </li>
                @else

                <li class="nav-item">
                <a href="{{ route('login') }}" class="links-right">Login</a>             
               </li>

               @if (Route::has('register'))

                <li class="nav-item">
                <a href="{{ route('register') }}" class="links-right">Register</a>                </li>


                @endif
                @endauth

            </ul>
            @endif

            </div>
        </div>
        </nav>





</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>