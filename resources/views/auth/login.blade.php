

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLGCL Login | COVID-19 Contact Tracing System</title>
    


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .margin-top{
        margin-top:4%;
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

@extends('layouts.app')


@section('content')





<div class="container-fluid margin-top" >

    <div class="row">
        
        <div class="col-12 col-lg-12 col-md-12  d-flex flex-column justify-content-center align-items-center mb-5" >

            <div class="card" style="box-shadow:0px 0px 5px #c7c8c9; padding:15px;">


                        <div class="photo mt-3 mb-0"  style="margin:0 auto; border-radius:50%;">
                            <img src="image/user.jpg" alt="darwin-piodos-image" width="100px"style="border-radius:50%;">
                        </div>
                

                <!-- <div class="card-body"> -->
                    
                    <form method="POST" action="{{ route('login') }}" class="">
                        @csrf

                        <!-- <div class="form-group row "> -->

                        
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('') }}</label>

                            <div class="col-md-12">

                            <div class="fs-3" style="margin-bottom:5%; font-weight:bold; color:#3d3d3d;">{{ __('Sign In') }}</div>

                                <input style="width:350px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->

                        <!-- <div class="form-group row "> -->

                            <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->

                        <div class="form-group row">
                            <div class="col-md-12 text-center mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group row mb-0"> -->
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn" style="background-color:#0299eb; color:white;font-weight:600; letter-spacing:1px;">
                                    {{ __('SIGN IN') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-decoration-none mt-2" href="{{ route('password.request') }} " style="color:#0299eb;>">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        <!-- </div> -->
                    </form>




                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

