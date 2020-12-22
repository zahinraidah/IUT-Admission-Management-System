@extends ('homepagelayout')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Applicant's Login</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
</head>
<style>

    .container{
       
       }
    .container2{
     
         margin-top: 50px;
       
               }

    .admission {
            float: middle;
            color: #228B22;
             }

    .card {
          float: middle;
          }
</style>

<body>
    
    <div class="container2" >
      @if (session()->has ('notification'))
      <div class="row" float="middle"  >
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            Alert! {{ session()->get('notification')}}
          </button>
        </div>
        @endif
      </div>
  </div>
     
@section ('content')
 <div class="container">
    <div class="admission">
        <center><h1><u><b>APPLICANT LOGIN</b></u></h1></center>
        <br>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="checklogin">
                        @csrf

                        <div class="form-group row">
                            <label for="PIN" class="col-md-4 col-form-label text-md-right">PIN</label>

                            <div class="col-md-6">
                                <input name="pin" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                               
                                <input type="submit" name="login" value="Login" class="btn btn-primary">

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>

