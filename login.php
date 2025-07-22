<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f0f8ff;
      font-family: Arial, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: #007bff;
      box-shadow: 0 0 12px #007bffaa;
      padding: 0.8rem 1.5rem;
      font-weight: 600;
    }

    .navbar-brand,
    .nav-link {
      color: #fff;
      text-shadow: 0 0 6px #99ccffaa;
      transition: color 0.25s ease, text-shadow 0.25s ease;
      font-size: 1.1rem;
    }

    .nav-link:hover,
    .navbar-brand:hover {
      color: #cce5ff;
      text-shadow: 0 0 15px #cce5ffcc;
    }

    .navbar-nav {
      gap: 1rem;
      flex-wrap: nowrap;
    }

    .form-container {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem 1rem;
    }

    .login-box {
      background: #fff;
      padding: 2rem;
      box-shadow: 0 0 10px #007bff66;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #007bff;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="register.php">Registration</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="welcome.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login Form -->
  <div class="form-container">
    <div class="login-box">
      <h2>Login</h2>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
         <p class="mt-3 text-center">
  Don't have an account?
  <a href="register.php" class="text-decoration-none text-primary fw-bold">Register here</a>
</p>

      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
      $con=mysqli_connect('localhost','root','','registersys');
      session_start();
      if(!$con)
      {
        echo"not Connected";
      }
      else
      {
        if(isset($_POST['login']))
        {
          $password=$_POST['password'];
          $email=$_POST['email'];

          $sel="SELECT * FROM regsys WHERE email = '$email' AND passwoed = '$password'";
          $result=mysqli_query($con,$sel);

          $rowcount=mysqli_num_rows($result);

          if($rowcount>0)
          {
             $_SESSION['email'] = $email;
             echo "<script>alert('Login Successful!!');window.location.href='welcome.php';</script>";
          }
          else
          {
            echo"<script>alert('Invalid Email or Password');</script>";
          }

        }
      }
?>
