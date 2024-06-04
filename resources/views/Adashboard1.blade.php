<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/style2.css">
  
  <!--Tailwind css-->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
</head>

<body>

  <header class="try">
    <a href="#" style="color: white;font-size: 20px;">LAWYER MANAGEMENT SYSTEM
    <!-- <a href="#" class="logo"> -->
      <!-- <ion-icon name="medkit-outline"></ion-icon> -->
    </a>
    <div class="navi">
      <ul class="menu">
        <div class="close-btn"></div>
        <li class="menu-item"><a href="#">Home</a></li>
        <li class="menu-item">
          <a class="sub-btn" href="#">
            <ion-icon name="person-remove-outline" style="width: 50px; font-size: 20px; justify-content:left;">
            </ion-icon>
          </a>
          <ul class="sub-menu">
            <li class="sub-item"><a href="#">LogOut</a></li>
          </ul>
        </li>
        <li class="menu-item">
      </ul>
      </li>
      </ul>
      </li>
      </ul>
    </div>
    <div class="menu-btn"></div>
  </header>


  <div class="nav">
    <ul>
      <li class="list active">
        <b></b>
        <b></b>
        <a href="#">
          <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
          </span>
          <span class="title">Home</span>
        </a>
      </li>
      <li class="list">
        <b></b>
        <b></b>
        <a href="handleAdminData(SA)">
          <span class="icon">
            <ion-icon name="person-circle-outline"></ion-icon>
          </span>
          <span class="title">Profile</span>
        </a>
      </li>
      <li class="list">
        <b></b> 
        <b></b>
        <a href="client_show">
          <span class="icon">
            <ion-icon name="person-add-outline"></ion-icon>
          </span>
          <span class="title">Add Client</span>
        </a>
      </li>
      <li class="list">
        <b></b>
        <b></b>
        <a href="case_show">
          <span class="icon">
            <ion-icon name="briefcase-outline"></ion-icon>
          </span>
          <span class="title">Case</span>
        </a>
      </li>
      <li class="list">
        <b></b>
        <b></b>
        <a href="bill_show">
          <span class="icon">
            <ion-icon name="cash-outline"></ion-icon>
          </span>
          <span class="title">Bill</span>
        </a>
      </li>
      <li class="list">
        <b></b>
        <b></b> 
        <a href="#">
          <span class="icon">
            <ion-icon name="lock-closed-outline"></ion-icon>
          </span>
          <span class="title">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="toggle">
    <ion-icon name="menu-outline" class="open"></ion-icon>
    <ion-icon name="close-circle-outline" class="close"></ion-icon>
  </div>

  <div class="slider">
    <div class="slide active">
      <img src="https://seodigitalgroup.com/wp-content/uploads/2019/10/lawyer-keywords.jpg" alt="">
      <div class="info">
        <h2>Bill Generator</h2>
        <p>Generate Our Bills in Easy and friendly manner. Check Out Bill Generation</p>
      </div>
    </div>
    <div class="slide">
      <img src="https://podshifter.com/wp-content/uploads/2020/11/2.jpg" alt="">
      <div class="info">
        <h2>Credentials</h2>
        <p>Handle our own Credentialsin secure and safe way</p>
      </div>
    </div>
    <div class="slide">
      <img src="https://www.steveboyd.com/wp-content/uploads/2019/02/Attorney-Client-Privilege.jpg" alt="">
      <div class="info">
        <h2>Client Details</h2>
        <p>Handle your client details here and manage it more well.</p>
      </div>
    </div>
    <div class="slide">
      <img src="https://lawnine.com/wp-content/uploads/2020/09/Sean-Cassidy-Lawyer.jpg" alt="">
      <div class="info">
        <h2>Case Details</h2>
        <p>Update our case details and have proper view between you and your client.</p>
      </div>
    </div>
    <div class="slide">
      <img src="https://www.bill4time.com/blog/wp-content/uploads/history-lawyer-compensation-models-min.jpg" alt="">
      <div class="info">
        <h2>History</h2>
        <p>Check your Law Case history and have a better look out to our files.</p>
      </div>
    </div>
    <div class="navigation">
      <i class="fas fa-chevron-left prev-btn"></i>
      <i class="fas fa-chevron-right next-btn"></i>
    </div>
    <div class="navigation-visibility">
      <div class="slide-icon active"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>

  <div class="row">
    <div class="column">
      <div class="card">
        <img class="card-image" src="https://nypost.com/wp-content/uploads/sites/2/2019/06/lawyer-bad-work-stairwell-hookup.jpg?quality=80&strip=all">
        <p>Watch out your clients History and Get back to work.</p>
        <a href="client_show"><button class="button">Let's Go</button></a>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img class="card-image" src="https://cdn2.hubspot.net/hubfs/3873528/rawpixel-1055781-unsplash.jpg">
        <p>Search a case for a specific client and you are ready to go.</p>
        <a href="case_show"><button class="button">Let's Go</button></a>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img class="card-image" src="https://seodigitalgroup.com/wp-content/uploads/2019/10/lawyer-keywords.jpg">
        <p>Make your own Invoice in the easiest way with all the details.</p>
        <a href="invoice_show"><button class="button">Let's Go</button></a>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img class="card-image" src="https://media.istockphoto.com/photos/constitutional-crisis-or-criminal-investigation-concept-picture-id1150794519?k=6&m=1150794519&s=612x612&w=0&h=X_Xazg6u95FA9gT4OkKRwOZJRxV3B7yZW8Rbv9CbxYw=">
        <p>Watch out your clients Bill History or Create a new one.</p>
        <a href="bill_show"><button class="button">Let's Go</button></a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>


  <!-- footer -->
  <div class="a">
    <!-- <footer class="text-gray-600 body-font"> -->
    <div class=" px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
          viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Nexa Software</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020Nexa
        Software —
        <a href="https://www.nexasoftware.com/" class="text-gray-600 ml-1" rel="noopener noreferrer"
          target="_blank">@nexa_software</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
    <!-- </footer> -->



    <!-- image slider sxcript -->
    <script type="text/javascript">
      const slider = document.querySelector(".slider");
      const nextBtn = document.querySelector(".next-btn");
      const prevBtn = document.querySelector(".prev-btn");
      const slides = document.querySelectorAll(".slide");
      const slideIcons = document.querySelectorAll(".slide-icon");
      const numberOfSlides = slides.length;
      var slideNumber = 0;

      //image slider next button
      nextBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
          slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });

      //image slider previous button
      prevBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber--;

        if (slideNumber < 0) {
          slideNumber = numberOfSlides - 1;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });

      //image slider autoplay
      var playSlider;

      var repeater = () => {
        playSlider = setInterval(function () {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });

          slideNumber++;

          if (slideNumber > (numberOfSlides - 1)) {
            slideNumber = 0;
          }

          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        }, 4000);
      }
      repeater();

      //stop the image slider autoplay on mouseover
      slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
      });

      //start the image slider autoplay again on mouseout
      slider.addEventListener("mouseout", () => {
        repeater();
      });
    </script>

    <!-- Script for icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- vertical nvabar -->
    <script>
      //for toggle move
      let menuToggle = document.querySelector('.toggle');
      let nav = document.querySelector('.nav')
      menuToggle.onclick = function () {
        menuToggle.classList.toggle('active');
        nav.classList.toggle('active');
      }


      //add active class in selected list item 

      let list = document.querySelectorAll('.list');
      for (let i = 0; i < list.length; i++) {
        list[i].onclick = function () {
          let j = 0;
          while (j < list.length) {
            list[j++].className = 'list';

          }
          list[i].className = 'list active';
        }
      }
    </script>
    <!-- horizontal navbar -->
    <script type="text/javascript">
      //jquery for toggle dropdown menus
      $(document).ready(function () {
        //toggle sub-menus
        $(".sub-btn").click(function () {
          $(this).next(".sub-menu").slideToggle();
        });

        //toggle more-menus
        $(".more-btn").click(function () {
          $(this).next(".more-menu").slideToggle();
        });
      });

      //javascript for the responsive navigation menu
      var menu = document.querySelector(".menu");
      var menuBtn = document.querySelector(".menu-btn");
      var closeBtn = document.querySelector(".close-btn");

      menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
      });

      //javascript for the navigation bar effects on scroll
      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
    </script>


</body>

</html>