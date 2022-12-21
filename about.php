<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>SupplyBlock</title>
    <!-- header icon .. for browser tabs -->
    <link
      rel="SHORTCUT ICON"
      href="images/SupplyBlock.png"
      type="image/x-icon"
    />
    <link rel="ICON" href="images/SupplyBlock.png" type="image/ico" />

    <!-- Bootstrap links -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/mdbmin.css" rel="stylesheet" />
    <link href="css/mdb.min.css" rel="stylesheet" />

    <!-- Css file -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Roboto;
            box-sizing: border-box;
        }

        body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f1f1;
        }
        h1 {
            color: #9597d5;
        }

        .about-section{
                /* background: url(blockchain.png) no-repeat left;
                background-size: 55%; */

            overflow: hidden;
            padding: 100px 0;
            display: flex;
            align-items:center;
            justify-content:center;

        }

        .inner-container{
            width: 55%;
            display: flex;
            flex-direction:column;
            /* align-items:center; */
            justify-content:center;
            background: #444;
            padding: 150px;
            border-radius:15px;
        }

        .inner-container h1{
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 900;
        }

        .text{
            font-size: 16px;
            color: #fff;
            line-height: 30px;
            text-align: justify;
            margin-bottom: 40px;
        }
        .skills{
            display: flex;
            justify-content: space-around;
            font-weight: 700;
            font-size: 13px;
            color: #9597d5;
        }


        </style>

  </head>

  <?php
  if(isset($_SESSION['role'])){
  ?>

  <?php
    include ("navbar.php");
  ?>

    <?php
    include ("navv.php");
    ?>

  <body style="background-image: url('bkground.jpg');">
      <!-- <center> -->
      <div class="about-section">
        <div class="inner-container">
            <h1>SupplyBlock</h1>
            <p class="text">
            SupplyBlock is Decentralized E2E Logistics/Supply Chain Management Application that stores the whereabouts of product at every freight hub on the Blockchain. At consumer end, customers can simply scan the QR CODE of products and get complete information about the provenance of that product hence empowering consumers to only purchase authentic and quality products.
            </p>
            <div class="skills">
                <span>TRANSPARENT</span>
                <span>DECENTRALISED</span>
                <span>SECURE</span>
            </div>
        </div>
    </div>
  <!-- dont know why this part............ -->
    <!-- <div class="box">
      <div class="wave -one"></div>
      <div class="wave -two"></div>
      <div class="wave -three"></div>
    </div> -->

  <?php 
  }else{
    include 'redirection.php';
    redirect("index.php");
  } 
  ?>

  </body>
</html>