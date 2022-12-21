<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="SHORTCUT ICON" href="images/SupplyBlock.png" type="image/x-icon" />
    <link rel="ICON" href="images/SupplyBlock.png" type="image/ico" />

    <title>SupplyBlock</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- css file -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css" />

    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

  </head>
  <body class="violetgradient">

  <?php
  if( !isset($_SESSION['role']) ){
  ?>
  
  <!-- dont know this part ... maybe popup alert -->
  <center>
      <div class="customalert">
          <div class="alertcontent">
              <div id="alertText"> &nbsp </div>
              <img id="qrious">
              <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
              <button id="closebutton" class="formbtn"> Return </button>
          </div>
      </div>
  </center>
    <div style="width: 100%">
      <center>
      <div class="loginformcard" id="card1">
            <h4 style="color:#575B94;font-size:35px"> SupplyBlock - A Blockchain Based Product Originality Identification System</h4>
            <p style="max-width: 80%;">
           SupplyBlock is Decentralized E2E Logistics/Supply Chain Management Application that stores the whereabouts of product at every freight hub on the Blockchain. At consumer end, customers can simply scan the QR CODE of products and get complete information about the provenance of that product hence empowering consumers to only purchase authentic and quality products.
            </p>
                <div class="cardbtnarea">
                    <button class="col-md-2 rolebtn" id="login">Login</button>
                    <button class="col-md-2 rolebtn" id="signup">Signup</button>
                </div>
      </div>

      

      <!-- signup form html -->

       <!-- Sign Up -->
      <div class="form-container sign-up-form" id="maincard3">
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

            <button class="submit-btn" name="loginsubmit" value="submitted!" type="submit">Create Account</button>
            <!-- <input class="submit-btn" type="submit" value="Sign up" /> -->
          </form>
        </div>
      </div>


      <!-- <div class="loginformcard" id="maincard3">
            <h4 style="color:#575B94;font-size:35px"> Join SupplyBlock - Create a new account </h4>
            <form style="margin-top: 30px; margin-bottom: 30px;" action="registration.php" method="POST" onsubmit="return checkSecondForm(this);"> 
            

            <label type="text" class="formlabel"> Email </label>
            <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Userame </label>
            <input type="text" class="forminput" name="username" id="username" onkeypress="blockSpaces(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Password </label>
            <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Confirm Password </label>
            <input type="password" class="forminput" name="cpw" id="cpw" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Select Your Role </label>
            <select class="formselect" name="role">
              <option value="2">Consumer</option>
              <option value="1">Retailer</option>
              <option value="1">Distributor</option>
              <option value="0">Manufacturer</option>
            </select>

            <button class="formbtn" name="loginsubmit" value="submitted!" type="submit">Create Account</button>

            <br>
            <a href="#" id="gotologin"> Already on SupplyBlock? Sign in </a>
            </form>
      </div> -->


      <!-- Sign in  -->
      <div class="form-container sign-in-form" id="maincard2">
        <div class="form-box sign-in-box">
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
                name="pw" 
                id="pw" 
                onkeypress="isNotChar(event)"
                required
              />
              <div class="eye-btn">
                <i class="uil uil-eye-slash"></i>
              </div>
            </div>
            <div class="forgot-link">
              <a href="">Forgot password?</a>
            </div>
            <button class="submit-btn" name="loginsubmit" type="submit">Login</button>
            <!-- <input class="submit-btn" type="submit" value="Login" /> -->
          </form>
        </div>
        <div class="imgBox sign-in-imgBox">
          <div class="sliding-link">
            <p>Dont' have an account?</p>
            <span class="sign-up-btn">Sign up</span>
          </div>
          <img src="img/svg/signup.svg" alt="" />
        </div>
      </div>


 

      <!-- <div class="loginformcard" id="maincard2">
      <h4 style="color:#575B94;font-size:35px"> Login to your existing account</h4>
            <form style="margin-top: 30px; margin-bottom: 30px;" action="login.php" method="POST" onsubmit="return checkFirstForm(this);">

            <label type="text" class="formlabel"> Email </label>
            <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Password </label>
            <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>

            <button class="formbtn" name="loginsubmit" type="submit">Login</button>

            <br>
            <a href="#" id="gotosignup"> Not a member? Signup now </a>
            </form>

      </div> -->
      </center>
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


    <!-- JavaScript Code -->
    
    <script>

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

    $("#login").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#gotologin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#openlogin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#signup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#gotosignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#opensignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });

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