<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login  Tiket  Elektronik Taman Nasional Baluran</title>
    <style>
      footer {
    position: fixed;
    height: 50px;
    bottom: 0;
    width: 100%;
    }
    </style>
  </head>
  <body style="background-color: #e2e0e0;">
    <div class="container-fluid">
      <div class="mx-auto bg-info" style="width: 100%">
        <h3 class="display-4 text-center text-white" style="padding-top: 40px; font-family: 'Franklin Gothic Medium'; padding-bottom: 20px;">Tiket Elektronik<br>Taman Nasional Baluran</h3>
      </div>
      <div class="mx-auto">
        <h3 class="text-center text-primary" style="padding-top: 20px;">Silahkan Login</h3>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        
      <div class="mx-auto" style="padding-top: 20px;">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <input class="form-control form-control-lg text-center @error('email') is-invalid @enderror" type="text" placeholder="Username" value="{{Request::input("email")}}" name="email" style="background-color: #b1b1b1;">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class="mx-auto" style="padding-top: 20px;">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <input class="form-control form-control-lg text-center @error('password') is-invalid @enderror" type="password" placeholder="Password" value="{{Request::input("password")}}" name="password" style="background-color: #b1b1b1;">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class="mx-auto" style="padding-top: 20px;">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 text-center">
            <button type="submit" class="btn btn-primary" style="width: 10rem; font-weight: bold;">LOGIN</button>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </form>
    </div>
    <footer class="footer" style="background-color: #b1b1b1;">
      <p class="text-center" style="padding-top: 20px;">&copy; 2020 <a href="https://www.instagram.com/misbahur_rifqi/">AdminOsingTech - Design Website.</a> <b>Version 1.0.0</b></p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>