<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<form method="POST" action="login_chk.php">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">K-League TM</h1>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name = "id" id="floatingID" placeholder="ID">
                  <label for="floatingInput">ID</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name = "pw" id="floatingPW" placeholder="Password">
                  <label for="floatingPassword">PW</label>
                </div>
                <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="submit" >Sign up</button>
              <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="button" onclick = "location.href = './signin_form.php'">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
</form>
</body>
</html>

