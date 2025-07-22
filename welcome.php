<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'registersys');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get email from session
$email = $_SESSION['email'];

// Fetch user data
$query = "SELECT * FROM regsys WHERE email = '$email'";
$result = mysqli_query($con, $query);

$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff;
      font-family: Arial, sans-serif;
    }

    .container {
      margin-top: 80px;
      text-align: center;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #007bff;
      box-shadow: 0 0 10px #007bff88;
    }

    .logout-btn {
      margin-top: 20px;
    }

    .card {
      padding: 30px;
      box-shadow: 0 0 12px rgba(0, 123, 255, 0.3);
      border-radius: 10px;
      display: inline-block;
    }

    .user-info {
      margin-top: 20px;
      font-size: 1.1rem;
      text-align: left;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <img src="image/<?php echo $user['dp']; ?>" class="profile-img" alt="Profile Picture">
    <h2 class="mt-3">Welcome, <?php echo $user['name']; ?>!</h2>
    
    <div class="user-info mt-3">
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
      <p><strong>Date of Birth:</strong> <?php echo $user['dob']; ?></p>
    </div>

    <a href="login.php" class="btn btn-danger logout-btn">Logout</a>
  </div>
</div>

</body>
</html>
