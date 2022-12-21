<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="SHORTCUT ICON" href="images/SupplyBlock.png" type="image/x-icon" />
    <link rel="ICON" href="images/SupplyBlock.png" type="image/ico" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    
  </head>
  <body>

  <?php
  if( !isset($_SESSION['role']) ){
  ?>
    <!-- Sign in  -->
    <div class="form-container sign-in-form">
      <div class="form-box sign-in-box">
        <h1><u>SupplyBlock</u></h1>
        <h2>Login</h2>
        <form action="login.php" method="POST" onsubmit="return checkFirstForm(this);">
          <div class="field">
            <i class="uil uil-at"></i>
            <input type="email" placeholder="Email ID" name="email" id="email" onkeypress="isNotChar(event)" required />
          </div>
          <div class="field">
            <i class="uil uil-lock-alt"></i>
            <input
              class="password-input"
              type="password"
              placeholder="Password"
              name="pw" id="pw" onkeypress="isNotChar(event)"
              required
            />
            <div class="eye-btn">
              <i class="uil uil-eye-slash"></i>
            </div>
          </div>
          <div class="forgot-link">
            <a href="">Forgot password?</a>
          </div>
          <input class="submit-btn" type="submit" value="Log in" name="loginsubmit" />
        </form>
      </div>
      <div class="imgBox sign-in-imgBox">
        <div class="sliding-link">
          <p>Dont' have an account ?</p>
          <span class="sign-up-btn">Sign up</span>
        </div>
        <img src="img/svg/signup.svg" alt="" />
      </div>
    </div>

    <!-- Sign Up -->
    <div class="form-container sign-up-form" >
      <div class="imgBox sign-up-imgBox">
        <div class="sliding-link">
          <p>Already a member?</p>
          <span class="sign-in-btn">Sign in</span>
        </div>
        <img src="img/svg/signin.svg" alt="" />
      </div>
      <div class="form-box sign-up-box">
        <h2>Sign up</h2>
        <form action="registration.php" method="POST" onsubmit="return checkSecondForm(this);">
          <div class="field">
            <i class="uil uil-at"></i>
            <input type="email" placeholder="Email ID" name="email" id="email" onkeypress="isNotChar(event)" required />
          </div>
          <div class="field">
            <i class="uil uil-user"></i>
            <input type="text" placeholder="Username" name="username" id="username" onkeypress="blockSpaces(event)" required />
          </div>
          <div class="field">
            <i class="uil uil-lock-alt"></i>
            <input type="password" placeholder="Password" name="pw" id="pw" onkeypress="isNotChar(event)" required />
          </div>
          <div class="field">
            <i class="uil uil-lock-access"></i>
            <input type="password" placeholder="Confirm Password" name="cpw" id="cpw" onkeypress="isNotChar(event)" required />
          </div>
          <div class="field">
            <i class="uil uil-house-user"></i>
              <select class="formselect" name="role">
                <option value="" disabled selected hidden>Choose a role</option>
                <option value="2">Consumer</option>
                <option value="1">Retailer</option>
                <option value="1">Distributor</option>
               <option value="0">Manufacturer</option>
              </select>
          </div>

          <input class="submit-btn" name="loginsubmit" value="Sign up" type="submit" />

        </form>
      </div>
    </div>
  <?php
  }else{
      include 'redirection.php';
      redirect('checkproduct.php');
    }
    ?>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Material Design Bootstrap-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
      // input field focus effects
      const textInputs = document.querySelectorAll("input");

      textInputs.forEach((textInput) => {
        textInput.addEventListener("focus", () => {
          let parent = textInput.parentNode;
          parent.classList.add("active");
        });

        textInput.addEventListener("blur", () => {
          let parent = textInput.parentNode;
          parent.classList.remove("active");
        });
      });

      // password show/hide button
      const passwordInput = document.querySelector(".password-input");
      const eyeBtn = document.querySelector(".eye-btn");

      eyeBtn.addEventListener("click", () => {
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          eyeBtn.innerHTML = "<i class='uil uil-eye'></i>";
        } else {
          passwordInput.type = "password";
          eyeBtn.innerHTML = "<i class='uil uil-eye-slash'></i>";
        }
      });

      // Sliding animation between signup and signin forms
      const signUpBtn = document.querySelector(".sign-up-btn");
      const signInBtn = document.querySelector(".sign-in-btn");
      const signUpForm = document.querySelector(".sign-up-form");
      const signInForm = document.querySelector(".sign-in-form");

      signUpBtn.addEventListener("click", () => {
        signInForm.classList.add("hide");
        signUpForm.classList.add("show");
        signInForm.classList.remove("show");
      });

      signInBtn.addEventListener("click", () => {
        signInForm.classList.remove("hide");
        signUpForm.classList.remove("show");
        signInForm.classList.add("show");
      });


    // doesn't allow anything other than a digit to be entered
      function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
      } 

    // doesn't allow ' to be entered in the field
    function isNotChar(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'"){
        evt.preventDefault();
      }
    }

    // doesn't allow ' & blankSpace to be entered in the field
    function blockSpaces(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'" || ch==" "){
        evt.preventDefault();
      }
    }

    function blockSpecialChar(e){
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k >= 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 46|| k == 42|| k == 33 || k == 32 || (k >= 48 && k <= 57));
    }


    function checkSecondForm(theform){
      var email = theform.email.value;
      var pw = theform.pw.value;
      var cpw = theform.cpw.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }

      if (pw!=cpw) {
        showAlert("Please check your password");
        return false;
      }
      return true;
    }

    function checkFirstForm(theform){
      var email = theform.email.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }
      return true;
    }

    function showAlert(message){
      $("#alertText").html(message);
      $("#qrious").hide();
      $("#bottomText").hide();
      $(".customalert").show("fast","linear");
    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    </script>
  </body>
</html>
