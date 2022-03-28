

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL | COVID-19 Contact Tracing System | User Profile</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<style>
.darwin-piodos{
    width:200px;
    border:1px solid #0d6efd;
}
.main-container{
    background-color:none;
    margin:0 auto;
}

.line-three{

    display:grid;
    grid-template-columns: auto auto auto auto;
    margin-top:80px;
    
}

.line-two{
margin-top:20px;
}


.line-one{
    display:flex;
    align-items:flex-end;
}


.bold-title{
    font-weight:600;
}

.main-container{
    display:flex;
    flex-direction:column;

    align-items:center;
    margin-top:90px;
}

.address{
    display:flex;
}

.address-name{
margin-left:10px;
}

.button-containers{
    margin-left:40px;
}

</style>
</head>
<body>

@include('navbar')

<div class="container-fluid main-container">

    <div class="container line-one">

        <img src="image/darwin-piodos.jpg" alt="User's Profile Picture" class="darwin-piodos oultine-primary">

        <div class="button-containers">

            <button class="btn btn-outline-primary px-5">Edit Profile</button>
            
            <button class="btn btn-outline-primary px-5">See More</button>
        </div>

    </div>

    <div class="container line-two">

        <div class="head-name">
            <h2>DARWIN DIVINO PIODOS</h2>
        </div>
        <div class="address">
            <div class="icon-location">

                <i class="fa solid fa-map"></i>

            </div>
            <div class="address-name">
                <h6>R.V. Fulache St., Eastern Barangay, Hilongos, Leyte</h6>
            </div>
        </div>
        
    </div>

    <div class="container line-three">



        <div class="left-one">

            <p class="bold-title">Birthday:</p>
            <p class="bold-title">Gender:</p>
            

        </div>

        <div class="left-two">
            <p>October 22, 2000</p>
            <p>Male</p>
            

        </div>

        <div class="right-one">

            <p class="bold-title">Email Address:</p>
            <p class="bold-title">Contact Number:</p>

        </div>

        <div class="right-two">
            <p>darwindivinopiodos14@gmail.com</p>
            <p>09385334758</p>


        </div>
        


    </div>




</div>

    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/0578c82be0.js" crossorigin="anonymous"></script>


</body>
</html>