

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

<style>
    body{
        background-color:whitesmoke;
    }
    
    .container-fluid{
    }
    .main-container{
        display:flex;
       
    }
    .sidebar{
        position:fixed;
        width:20%;
        background-color:#0d6efd;;
        height:100%;
        box-shadow:2px 5px 5px gray;
       

    }
    .content-bar{
        width:80%;
        
        position:absolute;
        right:0px;
       
    }

    .darwin-piodos{
        border-radius:50%;
        margin-left:15px;
    }

    .border-left{
        margin-right:8px;
        margin-left:15px;
    }
  

    .user-bar{
        position:absolute;
        right:25px;
        display:flex;
        align-items:center;
        text-align:right;
       
    }

    .topbar{
        display:flex;
        align-items:center;
        background-color:white;
        
        position:relative;
        right:0px;
       padding:25px 30px;
       z-index:-1;
       margin-bottom:3%;
        
    }
    .text-container{
        color:whitesmoke;
        display:flex;
        text-align:center;
        font-size:15px;
        margin-top:8px;
    }
    .mlg-logo{
        text-align:center;
        margin-top:7%;
    }
    .hr-line{
        width:80%;
        color:white;
      margin:0 auto;
    }
    .navs{
     
        margin-top:30px;
        color:whitesmoke;
    }
    .navs-item{
      
        padding:10px 30px;
        transition:0.1s ease-in-out;
       
    }
    .navs-item:hover{
      
    
      background-color:white;
  }

    .links-profile{
        text-decoration:none;
        color:whitesmoke;
        transition:0.1s ease-in-out;
       
    }
    .links-profile:hover{
      
        color:black;
    }

    .icon-right{
        margin-right:10px;
    }

    .unod-bar{
        width:95%;
        position:relative;
        margin-top:10%;
        background-color:white;
        z-index:-1;
       
        margin:0 auto;
        border-radius:4px;
        box-shadow:2px 3px 6px #b5b5b5;
    }
</style>
</head>
<body>



<div class="container-fluid main-container p-0">


    <div class=" sidebar">

        <div class="mlg-logo">
            <img src="image/mlg-logo.png" width="35px">

            <div class="text-container">
                <p>MLGCL COVID-19 CONTACT TRACING SYSTEM</p>
             
            </div>
        </div>

        <div class="hr">

            <hr class=hr-line>

        </div>

        <div class="navs">

            <a href="#" class="links-profile"><div class="navs-item"><i class="fa brands fa-windows icon-right"></i>Dashboard</div></a>
            <a href="#" class="links-profile"><div class="navs-item"><i class="fa solid fa-user icon-right"></i>Profile</div></a>
            <a href="#" class="links-profile"><div class="navs-item"><i class="fa solid fa-wrench icon-right"></i>Settings</div></a>
            <a href="#" class="links-profile"><div class="navs-item"> <i class="fa solid fa-database icon-right"></i>Users List</div></a>

        </div>

    </div>



    <div class=" content-bar">

        <div class="topbar">

            <div class="title-bar">
                
                Dashboard (Admin)

            </div>

            <div class="user-bar">

                <div class="icon"><i class="fa solid fa-bell"></i></div>
                <div class="border-left"> | </div>
                <div class="username">Darwin Divino Piodos</div>
                <div class="user profilephoto">
                    <img src="image/darwin-piodos.jpg" width="30px" class="darwin-piodos">
                </div>

            </div>

        </div>

        <div class="unod-bar">
            <p>Announcement</p>
        </div>
    </div>
   
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>


</body>
</html>