




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL Register | COVID-19 Contact Tracing System</title>
    


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .margin-top{
        margin-top:5%;
    }

    .card-header{
        font-size:30px;
    }
    .card-body{
        margin-top:4%;
    }
    .btn{
        width:100%;
        height:50px;
       
    }
</style>


</head>


<body>
@extends('footer')


@extends('layouts.appear')


@section('content')


<div class="container margin-top ">

<div class="row d-flex align-items-center justify-content-center">

<div class="col-lg-5 col-md-8">

<div class="fs-3" style="margin-bottom:5%; font-weight:bold; color:#3d3d3d;">{{ __('Registration') }}
</div>

<div class="" style="margin-bottom:5%; font-weight:bold; color:#3d3d3d; font-size:14px; margin-top:-19px;">{{ __('Please provide all information requested below.') }}
</div>


<!-- <br><small style="font-size:16px;">Please provide all information requested below.</small> -->


    <div class="card-body">

            <form method="POST" action="{{ route('register') }}" enctype= "multipart/form-data">
                @csrf
            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input name -->
                        <p style="color:black; font-weight:900;margin-top:3%;">Basic Information</p>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="enter name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
            </div>
            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input email -->
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="enter email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small style="color:gray; font-size:10px;">Make sure your email address is correct.</small>

                </div>
            </div>


            <div class="row">
                <div class="col mt-2 mb-2">
                       
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="enter password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
            </div>

            <div class="row">
                <div class="col mt-2 mb-2">
                       
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">

                </div>
            </div>


            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input gender sample input only-->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" id="gender"name="gender">
                        <option selected>Male</option>
                        <option value="2">Female</option>
                        </select>
                </div>
            </div>
            
            <div class="row">

            <p class=" m-2 mt-3 " style="color:black;">Date of Birth</p>
           
                <div class="col-5 mt-2 mb-2">
                       
              
                        <!-- input month -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="dmonth">
                        <option selected>January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                        </select>
                </div>
                <div class="col-3 mt-2 mb-2">
                        <!-- input day -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="dday">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>

                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>

                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                        </select>
                </div>
                <div class="col-4 mt-2 mb-2">
                        <!-- input year -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="dyear">
                      
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option selected>2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>

                        </select>
                </div>
            </div>

            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input primary mobile number -->
                        <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required placeholder="primary mobile number (mandatory)" >

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small style="color:gray; font-size:10px;">Please input your correct mobile number.</small>

                </div>
            </div>

            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input secondary mobile number -->
                        <input id="secondaryphone" type="tel" class="form-control" name="secondaryphone" value="{{ old('secondaryphone') }}"  placeholder="secondary mobile number (optional)" >

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="col mt-2 mb-2">
                        <!-- input landline mobile number -->
                        <input id="landlinephone" type="tel" class="form-control" name="landlinephone" value="{{ old('landlinephone') }}"  placeholder="landline number (optional)" >

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

            </div>

            <div class="row">
                <div class="col mt-2 mb-2">

                <p style="color:black; font-weight:900; margin-top:3%;">Address</p>
                        <!-- input province -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="province" id="province">
<!--                                 
                        <option value="1">Bohol</option>
                        <option value="1">Cebu</option> -->
                        <option selected>Leyte</option>
                        <!-- <option value="1">Samar</option>
                        <option value="1">Negros</option>
                        <option value="1">Davao</option> -->
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input city/municipality -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="city_municipality" id="city_municipality">
<!--                                 
                        <option value="1">Bato</option> -->
                        <option selected>Hilongos</option>
                        <!-- <option value="2">Hindang</option>
                        <option value="3">Inopacan</option>
                        <option value="4">Matalom</option> -->
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input zipcode -->
                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" autofocus placeholder="zipcode">

                </div>
            </div>
            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input barangay -->
                        <select class="form-select form-select-lg fs-6" aria-label=".form-select-lg example" name="barangay" id="barangay">
                        <option selected>Agutayan</option>
                        <option value="Atabay">Atabay</option>
                        <option value="Baas">Baas</option>
                        <option value="Bagong Lipunan (Bliss)">Bagong Lipunan (Bliss)</option>
                        <option value="Bagumabayan">Bagumabayan</option>
                        <option value="Baliw">Baliw</option>
                        <option value="Bantigue">Bantigue</option>
                        <option value="Bon-ot">Bon-ot</option>
                        <option value="Bung-aw">Bung-aw</option>

                         <option value="Cacao">Cacao</option>
                         <option value="Campina">Campina</option>
                         <option value="Cantandog 1">Cantandog 1</option>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="col mt-2 mb-2">
                        <!-- input current complete address -->
                        <input id="c_address" type="text" class="form-control @error('c_address') is-invalid @enderror" name="c_address" value="{{ old('c_address') }}" required autocomplete="c_address" autofocus placeholder="current complete address">
                        <small style="color:gray; font-size:10px;">House #, Street, Subdivision, Brgy, City/Municipality</small>

                </div>
            </div>


            <div class="row mt-3">
                <div class="col">

                  <!-- input name -->
                  <p style="color:black; font-weight:900;margin-top:3%;">Uploads</p>


                <div class="card">
                    <div class="card-header text-center p-0 d-flex align-items-center justify-content-center m-0 pt-3 fs-5 fw-bold " style="background-color:#0299eb; color:white;"><p>PHOTO OF FACE</p></div>
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-lg-12 mb-3 text-center">Please upload latest photo of your face</div>
                            <div class="col-lg-12">
                            <input id="profile_picture" type="file" class="form-control" name="profile_picture">

                            @if ($errors->has('profile_picture'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                            @endif
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div>



<!--             
            <div class="row">
                <div class="col">

                <div class="card">
                    <div class="card-header text-center p-0 d-flex align-items-center justify-content-center m-0 pt-3 fs-5 fw-bold " style="background-color:#0299eb; color:white;"><p>PHOTO OF VALID ID</p></div>
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-lg-12 mb-3 text-center">Please upload a photo of a valid ID.</div>
                            <div class="col-lg-12">
                            <input id="valid_id" type="file" class="form-control" name="valid_id">

                            @if ($errors->has('valid_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valid_id') }}</strong>
                                    </span>
                            @endif
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div> -->

            <div class="row ms-2 me-2 mt-4">
                <div class="col mt-2 mb-2">
                <input class="form-check-input" type="checkbox" >

                <label class="form-check-label" for="authorize" style="font-size:14px; text-align:justify;">
                    {{ __('*  I hereby authorize the MLGCL COVID-19 Contact Tracing System, to collect and process the above information for the purpose of effecting control of the COVID-19 infection. I understand that my personal information is protected by RA 10173, Data Privacy Act of 2012 and that I am required by RA 11449, Bayanihan to Heal as One Act, to provide TRUTHFUL information.') }}
                </label>
                </div>
            </div>




            <div class="row">
                <div class="col mt-4 mb-2">
                        <!-- register -->

                        <button type="submit" class="btn btn-primary fs-6" style="background-color:#0299eb; color:white;font-weight:600; letter-spacing:1px;">
                            {{ __('REGISTER') }}
                        </button>

                </div>
            </div>



        </form>
    </div>
</div>
</div>

    
</div>
@endsection








<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

