<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/navstyle.css" />
  </head>

  <body>
    <div id="home">
      <header class="hero">
        <nav class="navbar">
          <h1 class="logo">
            <img src="/images/SupplyBlock.png" alt="">
          </h1>
          <div>
            <!-- --------------------------------------
                  -------- Hamburger Links ------------
                  --------------------------------------- -->
            <div class="nav-menu">
              <!-- Header icons -->
              <a href="#twitter" class="nav-link"
                ><i class="fab nav-icon fa-twitter"></i>Twitter</a
              >
              <a href="#linkedin" class="nav-link"
                ><i class="fab nav-icon fa-linkedin"></i>Linkedin</a
              >
              <a href="#tiktok" class="nav-link"
                ><i class="fab nav-icon fa-tiktok"></i>Tiktok</a
              >
              <a href="#whatsapp" class="nav-link"
                ><i class="fab nav-icon fa-whatsapp"></i>WhatsApp</a
              >
              <a href="#facebook" class="nav-link"
                ><i class="fab nav-icon fa-facebook"></i>Facebook</a
              >
            </div>

            <!-- --------------------------------------
                  ---------- Hamburger button ---------------
                  --------------------------------------- -->
            <div class="hamburger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
          </div>
        </nav>
      </header>
    </div>

    <script>
      const hamburger = document.querySelector(".hamburger");
      const navMenu = document.querySelector(".nav-menu");

      hamburger.addEventListener("click", mobileMenu);

      function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
      }

      const navLink = document.querySelectorAll(".nav-link");

      navLink.forEach((n) => n.addEventListener("click", closeMenu));

      function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
      }
    </script>
  </body>
</html>
