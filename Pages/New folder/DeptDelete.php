<?php
  include "config.php";
  if (isset($_POST['submit'])) {
    $EmpID = $_POST['Empid'];
    $sql = "SELECT * FROM Department WHERE EId='$EmpID'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {
        echo "<script>alert('Oops! Department does not exist!! :(')</script>";
      }
      else
      {
        while($row = $result->fetch_assoc()) 
        {
          mysqli_query($conn, "delete from Department where DID='$EmpID'");
          echo "<script>alert('Department record deleted!')</script>";
        }
      }
    }
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Department">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Delete</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Add.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <style>
      .Question{
        display: flex;
        justify-content: center;
      }
    </style>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Delete">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-4-base u-header" id="sec-348b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
          <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-unstyled u-nav-1">
          <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="DeptView.php" style="padding: 10px 20px;">View</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="DeptAdd.php" style="padding: 10px 20px;">Add</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="DeptUpdate.php" style="padding: 10px 20px;">Update</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="DeptDelete.php" style="padding: 10px 20px;">Delete</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="DeptView.php" style="color: white; padding: 10px 20px;">View</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="DeptAdd.php" style="color: white; padding: 10px 20px;">Add</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="DeptUpdate.php" style="color: white; padding: 10px 20px;">Update</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="DeptDelete.php" style="color: white; padding: 10px 20px;">Delete</a>
              </li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <h2 class="u-text u-text-default u-text-1">Department</h2>
  </div></header>
<section class="u-clearfix u-palette-3-light-3 u-section-1" id="sec-0b4f">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div> <br><br> </div>  
    <div class="Question">
        <form  method="POST" >
          <label>Enter Department ID you want to delete: </label>
          &nbsp;&nbsp;
          <input type="text" name="Empid" required/>
          &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit">Delete</div>
</form></div>
</section>

<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-fbb7"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <p class="u-text u-text-1"> © 2021 Copyright:&nbsp;Helpinghands.com</p>
  </div></footer>
</body>
</html>