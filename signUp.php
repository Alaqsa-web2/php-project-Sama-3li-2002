
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>
<body>
    <main class="form-signin">
        <form action ="seconds.php" method="post">
            <a href="index.html">
              <h1 class="brand">Social Media</h1>
            </a>
          <h1 class="h3 mb-3 fw-normal">Register Now</h1>
      
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="floatingInput" placeholder="name">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInputEmail"name="floatingInputEmail" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword"name="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <a class="linksignup" href="login.html">I Have Account Go to Login</a>
          </div>
          <button class="w-100 btn btn-lg btnLogin" type="submit">Sign up</button>
        </form>
    </main>

    <!--Bootstrap 5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>