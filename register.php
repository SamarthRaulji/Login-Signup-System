<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    /* Body & background */
    body {
      background: #f9f9f9;
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navbar styling */
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

    /* Navbar links close together */
    .navbar-nav {
      gap: 1rem;
      flex-wrap: nowrap;
    }

    /* Container to center form vertically */
    .form-container {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 3rem 1rem;
    }

    /* Form card */
    .card {
      background-color: #fff;
      border-radius: 10px;
      max-width: 460px;
      width: 100%;
      padding: 2.5rem 2rem;
      box-shadow: 0 4px 20px #007bff44;
    }

    /* Form heading */
    h3 {
      color: #007bff;
      text-align: center;
      margin-bottom: 1.8rem;
      font-weight: 700;
      letter-spacing: 1.2px;
    }

    /* Form labels */
    .form-label {
      color: #555;
      font-weight: 600;
    }

    /* Inputs */
    .form-control {
      background-color: #fefefe;
      border: 1.5px solid #007bff;
      color: #333;
      border-radius: 6px;
      box-shadow: none;
      transition: 0.3s;
    }

    .form-control:focus {
      background-color: #fff;
      border-color: #66b0ff;
      box-shadow: 0 0 8px #66b0ffaa;
      color: #111;
      outline: none;
    }

    /* Submit button */
    .btn-primary {
      background-color: #007bff;
      border: none;
      font-weight: 700;
      padding: 0.65rem;
      border-radius: 8px;
      width: 100%;
      color: #fff;
      box-shadow: 0 0 20px #007bffcc;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #3399ff;
      box-shadow: 0 0 30px #3399ffcc;
      color: #fff;
    }

    /* Responsive tweaks */
    @media (max-width: 576px) {
      .card {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Registration</a>
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
            <a class="nav-link active" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-container">
    <div class="card shadow">
      <h3>Register</h3>
      <form action="register.php" method="POST" enctype="multipart/form-data" novalidate>
        <div class="mb-3">
          <label for="profile_pic" class="form-label">Profile Picture</label>
         <input type="file" name="fdp" id="fdp" class="form-control">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            required
            autocomplete="name"
          />
        </div>

        <div class="mb-3">
          <label for="birthdate" class="form-label">Birthdate</label>
          <input
            type="date"
            class="form-control"
            id="birthdate"
            name="birthdate"
            required
          />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            required
            autocomplete="email"
          />
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password"
            class="form-control"
            id="password"
            name="password"
            required
            autocomplete="new-password"
          />
        </div>

        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input
            type="password"
            class="form-control"
            id="confirm_password"
            name="cnpassword"
            required
            autocomplete="new-password"
          />
        </div>


        <button type="submit" name="submit" class="btn btn-primary">
          Register
        </button>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
      $con=mysqli_connect('localhost','root','','registersys');

      if($con)
      {
        
      }
      else
      {
        echo'Connected';
      }
?>
<?php
      if(isset($_POST['submit']))
      {
        $profile = $_FILES['fdp']['name'];
        $image_upload = move_uploaded_file($_FILES["fdp"]["tmp_name"], "image/".$_FILES["fdp"]["name"]);
            if($image_upload)
            {
              $name=$_POST['name'];
              $birthdate=$_POST['birthdate'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              $cnpassword=$_POST['cnpassword'];
              $phone=$_POST['phone'];
              $profile = $_FILES['fdp']['name'];

              $check_email="SELECT * FROM `regsys` WHERE email='$email' ";
              $result=mysqli_query($con,$check_email);

              if($password !== $cnpassword)
              {
                echo "<script>alert('Password do not match');</script>";
              }
              else
              {

                if(mysqli_num_rows($result)>0)
              {
                echo "<script>alert('Email Is Already Exist');</script>";
              }
              else
              {

                $ins="INSERT INTO `regsys`(`dp`, `name`, `dob`, `email`, `phone`, `passwoed`) VALUES ('$profile','$name','$birthdate','$email','$phone','$cnpassword')";


                $register=mysqli_query($con,$ins);
                if($register)
                {
                  echo "<script>alert('Registration Successful');</script>";
                } 
                else
                {
                  echo "<script>alert('Registration Failed!');</script>";
                }
              }

              }



            }


      }
?>
</html>

