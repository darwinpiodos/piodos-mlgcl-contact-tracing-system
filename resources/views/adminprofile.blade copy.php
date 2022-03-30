

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
        width:17%;
        background-color:#0299eb;;
        height:100%;
        box-shadow:2px 5px 5px gray;
       

    }
    .content-bar{
        width:83%;
        
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
        padding-left:10px;
        padding-right:10px;
    }
    .hr-line{
        width:80%;
        color:white;
      margin:0 auto;
    }

    .hr-line2{
        width:80%;
        color:white;
      margin:0 auto;
      margin-top:10%;
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
      
    
      background-color:whitesmoke;
  }

  .bg-dash{
      
/*     
      background-color:whitesmoke;
      color:#47494a; */
  }
  .bg-profile{
    background-color:whitesmoke;
      color:#47494a;
  }
  .bg-settings{
    /* background-color:whitesmoke;
      color:#47494a; */
  }
  .bg-list{
    /* background-color:whitesmoke;
      color:#47494a; */
  }

    .links-profile{
        text-decoration:none;
        color:whitesmoke;
        transition:0.1s ease-in-out;
       
    }
    .links-profile:hover{
      
        color:#47494a;
    }

    .icon-right{
        margin-right:10px;
    }

    .unod-bar{
        width:100%;
        position:relative;
        margin-top:10%;
        /* background-color:white; */
        z-index:-1;
       
        margin:0 auto;
        /* border-radius:4px;
        box-shadow:2px 3px 6px #b5b5b5; */
        padding-top:2%;
        padding-bottom:3%;
        /* padding-left:1.5 */
        color:#0299eb;
        display:flex;
    }

    .left-content-profile{
        width:70%;
        background-color:white;
        margin-left:30px;
        margin-right:10px;
        border-radius:4px;
        box-shadow:0px 2px 2px #b5b5b5;
    }

    .right-content-profile{
        width:30%;
        background-color:white;
        margin-right:30px;
        margin-left:10px;
        border-radius:4px;
        box-shadow:0px 2px 2px #b5b5b5;
        padding:30px;
        color:black;
    }

    .logo-card{
        display:flex;
        align-items:center;
        justify-content:center;
       
    }

    .logo-name-profile{
        font-weight:600;
        margin-left:10px;
    }
    .card-container{
        border:1px solid gray;
        padding:10px;
    }
    .qr-code{
        display:flex;
        justify-content:center;
    }
    .dummy-text{
        font-size:12px;
        text-align:center;
    }

    .hr-profile{
        width:80%;
        margin:0 auto;
    }
    .lower-profile-container{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;

    }

    .lingin-pic{
        border-radius:50%;
        filter:drop-shadow(0px 4px 2px gray);
        margin-bottom:15px;
    }

    .name-sa-user{
        text-align:center;
    }
    .head-name{

        font-weight:600;
    }
    .head-address{
        margin-top:-15px;
    }
    
    .head-year{
        font-weight:bold;
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

        <a href="{{url('admindashboard')}}" class="links-profile links-dashboard"><div class="navs-item bg-dash"><i class="fa brands fa-windows icon-right"></i>Dashboard</div></a>
            <a href="{{url('adminprofile')}}" class="links-profile"><div class="navs-item bg-profile"><i class="fa solid fa-user icon-right"></i>Profile</div></a>
            <a href="{{url('adminsettings')}}" class="links-profile"><div class="navs-item bg-settings"><i class="fa solid fa-wrench icon-right"></i>Settings</div></a>
            <a href="{{url('adminlist')}}" class="links-profile"><div class="navs-item bg-list"> <i class="fa solid fa-database icon-right"></i>Users List</div></a>

        </div>



        <div class="hr">

            <hr class=hr-line2>

        </div>




    </div>



    <div class=" content-bar">

        <div class="topbar">

            <div class="title-bar">
                
                Profile (Admin)

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

            <div class="left-content-profile">
                <div class="section-one">
                    <div class="head-one">
                        Vaccine Pre-Registration
                    </div>
                    <div class="head-two">
                        Pre-registration for COVID-19 vaccines is now open.
                    </div>
                    <div class="head-three">
                        <button class="btn btn-primary">
                            Register
                        </button>
                    </div>

                </div>

                <div class="section-two">
                    
                </div>

                <div class="section-three">
                    
                </div>

            </div>




            <div class="right-content-profile">

                <div class="card-container">

                    <div class="logo-card">

                        <div class="logox-container">
                            <img src="image/mlg-logo.png" class="mlg-logo-profile" width="49px" alt="mlg-logo.png">
                        </div>

                        <div class="logo-name-profile">
                            <p>MLGCL COVID-19 CONTACT TRACING SYSTEM</p>
                        </div>

                    </div>

                    <div class="qr-code">
                        <img src="image/qr-code.png" width="130px" alt="">
                    </div>
                    <div class="dummy-text">
                        DUMMY QR CODE
                        <p>(For Extra Content Only)<br>
                        I will add one soon but not now
                        </p>
                      
                    </div>

                    <div class="hr-profile">
                        <hr>
                    </div>

                    <div class="lower-profile-container">
                            <div class="image-user">

                                <img src="image/darwin-piodos.jpg" width="150px" alt="" class="lingin-pic">

                            </div>

                            <div class="name-sa-user">
                                <p class="head-name">DARWIN DIVINO PIODOS</p>
                                <p class="head-address">EASTERN HILONGOS</p>
                                <p class="head-year">BSIT-3</p>
                            </div>

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