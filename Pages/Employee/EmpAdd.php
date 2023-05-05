<?php
include "../config.php";
if (isset($_POST['submit'])) {
  $EmpID = $_POST['eid'];
  $FName = $_POST['fname'];
  $MName = $_POST['mname'];
  $LName = $_POST['lname'];
  $DOB = $_POST['dob'];
  $DOJ = $_POST['doj'];
  $std = $_POST['std'];
  $city = $_POST['city'];
  $aadhaar = $_POST['aadhaar'];
  $mobno = $_POST['mobno'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $gen = $_POST['gen'];
  $did = $_POST['did'];
  $hq = $_POST['hq'];
  $sql = "SELECT * FROM employee_address WHERE ZipCode='$zip'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
  } else {
    $cemp = "SELECT * from employee WHERE EID='$EmpID'";
    $cc = mysqli_query($conn, $cemp);
    if (!$cc->num_rows > 0) {
      echo "<script>alert('Employee record already exist!!')</script>";
    } else {
      $sql1 = "insert into employee_address values('$zip','$city','$state');";
      $result1 = mysqli_query($conn, $sql1);
    }
    $sql2 = "insert into employee values('$EmpID','$FName','$MName','$LName','$DOB','$DOJ','$std','$zip','$email','$mobno','$aadhaar','$gen','$did','$hq');";
    $result2 = mysqli_query($conn, $sql2);
  }
  if ($result2 and $result1) {
    echo "<script>alert('New Employee has been added to the table!!'); window.location.href = 'Employee/EmpView.php'; </script>";
  } else {
    echo "<script>alert('Employee record could not be added to the table!!')</script>";
  }
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Employee">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Add</title>
  <link rel="stylesheet" href="../../css/style2.css" media="screen">
  <link rel="stylesheet" href="../../css/Add.css" media="screen">
  <link rel="stylesheet" href="../../css/EmpView.css" media="screen">
  <script class="u-script" type="text/javascript" src="../../javascript/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../javascript/main2.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Add">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-palette-4-base u-header" id="sec-348b">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpView.php" style="color: white; padding: 10px 20px;">View</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpAdd.php" style="color: white; padding: 10px 20px;">Add</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpUpdate.php" style="color: white; padding: 10px 20px;">Update</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpDelete.php" style="color: white; padding: 10px 20px;">Delete</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="EmpView.php" style="color: white; padding: 10px 20px;">View</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="EmpAdd.php" style="color: white; padding: 10px 20px;">Add</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="EmpUpdate.php" style="color: white; padding: 10px 20px;">Update</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="EmpDelete.php" style="color: white; padding: 10px 20px;">Delete</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <h2 class="u-text u-text-default u-text-1">Employee</h2>
    </div>
  </header>
  <section class="u-clearfix u-palette-3-light-3 u-section-1" id="sec-0b4f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="container">
        <form action="" method="POST" class="">
          <p class="Employee" style="font-size: 2rem; font-weight: 800;">&nbsp;&nbsp;&nbsp;NEW EMPLOYEE DETAILS&nbsp;&nbsp;&nbsp;</p>
          <div class="input-group">
            <label>Employee ID*</label><br>
            <input type="text" placeholder="Employee ID" name="eid" required /><br><br>
          </div>
          <div class="input-group">
            <label>First Name*</label><br>
            <input type="text" placeholder="First Name" name="fname" required /><br><br>
          </div>
          <div class="input-group">
            <label>Middle Name</label><br>
            <input type="text" placeholder="Middle Name" name="mname" /><br><br>
          </div>
          <div class="input-group">
            <label>Last Name*</label><br>
            <input type="text" placeholder="Last Name" name="lname" required /><br><br>
          </div>
          <div class="input-group">
            <label>Date of Birth*</label><br>
            <input type="date" placeholder="Date of Birth" name="dob" required /><br><br>
          </div>
          <div class="input-group">
            <label>Mobile Number*</label><br>
            <input type="number" placeholder="Phone Number" name="mobno" required /><br><br>
          </div>
          <div class="input-group">
            <label>Date of Joining*</label><br>
            <input type="date" placeholder="Date of Joining" name="doj" required /><br><br>
          </div>
          <div class="input-group">
            <label>Street Address</label><br>
            <input type="text" placeholder="Street Address" name="std" /><br><br>
          </div>
          <div class="input-group">
            <label>City</label><br>
            <input type="text" placeholder="City" name="city" /><br><br>
          </div>
          <div class="input-group">
            <label>Zipcode*</label><br>
            <input type="number" placeholder="Zipcode" name="zip" required /><br><br>
          </div>
          <div class="input-group">
            <label>State</label><br>
            <input type="text" placeholder="State" name="state" /><br><br>
          </div>
          <div class="input-group">
            <label>Email Address*</label><br>
            <input type="email" placeholder="Email Address" name="email" required /><br><br>
          </div>
          <div class="input-group">
            <label>Aadhaar Number*</label><br>
            <input type="number" placeholder="Aadhaar Number" name="aadhaar" required /><br><br>
          </div>
          <div class="input-group">
            <label for="gen"> Gender*</label>&nbsp;&nbsp;
            <select id="gen" name="gen">
              <option value="Prefer not to disclose" selected>Prefer not to disclose</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
            <br><br>
          </div>
          <div class="input-group">
            <label>Department ID*</label><br>
            <input type="number" placeholder="Department ID" name="did" required><br><br>
          </div>
          <div class="input-group">
            <label for="hq"> Select your Highest Qualification*</label>&nbsp;&nbsp;
            <select id="hq" name="hq">
              <option value="Class 10">Class 10</option>
              <option value="Class 12">Class 12</option>
              <option value="Bachelors">Bachelors</option>
              <option value="Diploma">Diploma</option>
              <option value="Masters">Masters</option>
              <option value="PhD">PhD</option>
            </select>
            <br><br>
          </div>
          <div class="input-group">
            <button type="submit" name="submit" class="btn btn-success btn-all">Add Employee</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="Reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
      </div>
    </div>
    <div> <br><br> </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-de67">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> Created with​ ❤️ by <a href="https://github.com/SohhamSeal" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">Sohham Seal</a>.
      </p>
    </div>
  </footer>

</body>

</html>