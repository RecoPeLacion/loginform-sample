<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up | Log In</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
       <div class="title-text">
          <div class="title login">
             Account 
          </div>
          <div class="title signup">
             Account
          </div>
       </div>
       <div class="form-container">
          <div class="slide-controls">
             <input type="radio" name="slide" id="login">
             <input type="radio" name="slide" id="signup">
             <label for="login" class="slide login">Login</label>
             <label for="signup" class="slide signup">SignUp</label>
             <div class="slider-tab"></div>
          </div>
          <div class="form-inner">
             <form method="post" action="register.php" class="login" id="signIn">
                <div class="field">
                <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="field">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="pass-link">
                   <a href="#">Reset password?</a>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" name="signIn" value="Login">
                </div>
                
             </form>

             <form method="post" action="register.php" class="signup" id="signUp">
                <div class="field">
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                </div>
                <div class="field">
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                </div>
                <div class="field">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="field">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" name="signUp" value="SignUp">
                </div>
             </form>
          </div>
       </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>