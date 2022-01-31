<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Laravel 8 X LDAP</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.png" alt="Image" width="450px" class="mx-auto d-block">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">This applications use LDAP-based authentication. Please use this <a class="link-info" href="https://www.forumsys.com/2014/02/22/online-ldap-test-server/">account</a> from Online LDAP Test Server for sign in, </p>
              </div>
              <form action="/login" method="POST">
                @csrf
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required>
                  @error('username')
                  <div class="invalid-feedback mt-1 mb-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              </form>
              <div class="border border-1"></div>
              <div class="card border-0 bg-light">
                <div class="card-body px-0">
                  <h6 class="card-subtitle mb-2 text-muted" style="font-size: 12px;">Copyright © January 2022 - {{ now()->year }} Mr. Rama. All rights reserved</h6>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>