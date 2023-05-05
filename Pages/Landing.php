<?php

session_start();

error_reporting(0);

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Employee">
  <meta name="description" content="">
  <title>Landing</title>
  <link rel="stylesheet" href="../css/styles.css" media="screen">
  <link rel="stylesheet" href="../css/Landing.css" media="screen">
  <script class="u-script" type="text/javascript" src="../javascript/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../javascript/main.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i">

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Disaster Management Portal",
      "logo": "../images/helpinghands.png"
    }
  </script>
  <meta name="theme-color" content="#4496fd">
  <meta property="og:title" content="Landing">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-grey-90 u-header u-sticky u-sticky-886c u-header" id="sec-d167">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../index.html" class="u-hover-feature u-image u-logo u-image-1" data-image-width="249" data-image-height="250" title="Home">
        <img src="../images/helpinghands.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 400;">
          <a class="u-button-style u-custom-active-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container u-nav u-spacing-2 u-unstyled u-nav-1 u-nav-item"><h3>Helping Hands Login Dashboard</h3></div>
        <!-- <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../index.html" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../index.html#carousel_a672" style="padding: 10px 20px;">About Us</a>
            </li>
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../index.html#sec-fc80" style="padding: 10px 20px;">Contact Us</a>
            </li>
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Achievements.html" style="padding: 10px 20px;">Achievements</a>
            </li>
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Alerts-Hub.html" style="padding: 10px 20px;">Alerts Hub</a>
            </li>
            <li class="u-nav-item"><a class="u-active-palette-4-dark-1 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-base u-nav-link u-text-active-white u-text-hover-white u-text-white" href="login.php" style="padding: 10px 20px;">Login/Signup</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.html">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.html#carousel_a672">About Us</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.html#sec-fc80">Contact Us</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Achievements.html">Achievements</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Alerts-Hub.html">Alerts Hub</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">Login/Signup</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-25"></div>
        </div> -->
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-custom-color-3 u-section-1" id="sec-e7e6">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2><br>Welcome <?php echo $_SESSION['username'] ?>!!</h2>
      <a href="logout.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-3 u-palette-2-base u-radius-50 u-btn-1">Logout</a>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-text-palette-1-base u-top-right-radius-50 u-icon-1"><img src="../images/6186048.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-2">Employee</h1>
              <p class="u-align-center u-text u-text-default u-text-3"> Click the below button to view, modify or delete employee records.&nbsp;</p>
              <a href="Employee/EmpView.php" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-2">Next&nbsp;<span class="u-icon u-text-white u-icon-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-text-palette-1-base u-top-right-radius-50 u-icon-3"><img src="../images/376915.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-4">Department</h1>
              <p class="u-align-center u-text u-text-default u-text-5"> Click the below button to view, modify or delete departments.&nbsp;</p>
              <a href="dummy.html" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-3">Next&nbsp;<span class="u-icon u-text-white u-icon-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="u-container-align-center u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-text-palette-1-base u-top-right-radius-50 u-icon-5"><img src="../images/3045363.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-6">Volunteer</h1>
              <p class="u-align-center u-text u-text-default u-text-7"> Click the below button to view, modify or delete volunteer records.</p>
              <a href="dummy.html" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-4">Next&nbsp;<span class="u-icon u-text-white u-icon-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="u-container-align-center u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-text-palette-1-base u-top-right-radius-50 u-icon-7"><img src="../images/901388.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-8">Treasury</h1>
              <p class="u-align-center u-text u-text-default u-text-9"> Click the below button to view treasury records.</p>
              <a href="dummy.html" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-5">Next&nbsp;<span class="u-icon u-text-white u-icon-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="u-container-align-center u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-5">
            <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-text-palette-1-base u-top-right-radius-50 u-icon-9"><img src="../images/1605350.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-10">Resources</h1>
              <p class="u-align-center u-text u-text-default u-text-11"> Click the below button to view records of current shelters and buildings.</p>
              <a href="dummy.html" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-6">Next&nbsp;<span class="u-icon u-text-white u-icon-10" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
          <div class="u-container-align-center u-container-style u-custom-color-6 u-list-item u-repeater-item u-list-item-6">
            <div class="u-container-layout u-similar-container u-container-layout-6"><span class="u-border-3 u-border-palette-4-dark-1 u-bottom-left-radius-50 u-file-icon u-icon u-icon-rounded u-top-right-radius-50 u-icon-11"><img src="../images/1021220.png" alt=""></span>
              <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-palette-4-dark-1 u-text-12"> Awards</h1>
              <p class="u-align-center u-text u-text-default u-text-13"> Click the below button to view awards and certificates.</p>
              <a href="dummy.html" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-4-dark-1 u-radius-2 u-btn-7">Next&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                  </svg></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-de67">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> Created with​ ❤️ by <a href="https://github.com/SohhamSeal" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">Sohham Seal</a>.
      </p>
    </div>
  </footer>

</body>

</html>