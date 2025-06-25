<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email from the form
    $email = $_POST['email'];
    
    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } else {
        // Here you would typically:
        // 1. Check if email exists in your database
        // 2. Generate a unique reset token
        // 3. Store the token in the database with an expiration time
        // 4. Send an email with a password reset link
        
        // For this example, we'll just show a success message
        $success = "Password reset instructions have been sent to your email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    input {
      font-family: "Poppins", sans-serif;
      background: #f5f5f5;
    }

    .forgot-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .forgot-content {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
      padding: 40px;
      text-align: center;
    }

    .forgot-title {
      font-size: 2rem;
      color: #4481eb;
      margin-bottom: 20px;
    }

    .forgot-description {
      color: #666;
      margin-bottom: 30px;
    }

    .input-field {
      width: 100%;
      background-color: #f0f0f0;
      margin: 10px 0;
      height: 55px;
      border-radius: 55px;
      display: grid;
      grid-template-columns: 15% 85%;
      padding: 0 0.4rem;
      position: relative;
    }

    .input-field i {
      text-align: center;
      line-height: 55px;
      color: #acacac;
      transition: 0.5s;
      font-size: 1.1rem;
    }

    .input-field input {
      background: none;
      outline: none;
      border: none;
      line-height: 1;
      font-weight: 600;
      font-size: 1.1rem;
      color: #333;
    }

    .input-field input::placeholder {
      color: #aaa;
      font-weight: 500;
    }

    .btn {
      width: 100%;
      background-color: #5995fd;
      border: none;
      outline: none;
      height: 49px;
      border-radius: 49px;
      color: #fff;
      text-transform: uppercase;
      font-weight: 600;
      margin: 20px 0;
      cursor: pointer;
      transition: 0.5s;
    }

    .btn:hover {
      background-color: #4d84e2;
    }
    
    .message {
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    
    .success {
      background-color: #d4edda;
      color: #155724;
    }
    
    .error {
      background-color: #f8d7da;
      color: #721c24;
    }
    
    .back-to-login {
      margin-top: 20px;
    }
    
    .back-to-login a {
      color: #4481eb;
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.3s;
    }
    
    .back-to-login a:hover {
      color: #2a75e0;
      text-decoration: underline;
    }
  </style>
  <title>Forgot Password</title>
</head>

<body>
  <div class="forgot-container">
    <div class="forgot-content">
      <h1 class="forgot-title">Forgot Password</h1>
      <p class="forgot-description">Enter your email and we'll send you a link to reset your password.</p>
      
      <?php if(isset($error)): ?>
        <div class="message error"><?php echo $error; ?></div>
      <?php endif; ?>
      
      <?php if(isset($success)): ?>
        <div class="message success"><?php echo $success; ?></div>
      <?php endif; ?>
      
      <form action="forgot_password.php" method="POST">
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Enter your email" required />
        </div>
        <button type="submit" class="btn">Send Reset Link</button>
      </form>
      
      <div class="back-to-login">
        <a href="index.html">Back to Sign In</a>
      </div>
    </div>
  </div>
</body>

</html>