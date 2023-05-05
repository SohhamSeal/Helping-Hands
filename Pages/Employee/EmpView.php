<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="INTUITIVE">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>View</title>
  <link rel="stylesheet" href="../../css/style2.css" media="screen">
  <link rel="stylesheet" href="../../css/Add.css" media="screen">
  <script class="u-script" type="text/javascript" src="../../javascript/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../javascript/main2.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  
  <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="../../css/EmpView.css" media="screen">
  <style>

  </style>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="View">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpView.php" style="padding: 10px 20px;">View</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpAdd.php" style="padding: 10px 20px;">Add</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpUpdate.php" style="padding: 10px 20px;">Update</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EmpDelete.php" style="padding: 10px 20px;">Delete</a>
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
      <div class="limiter">
        <div><br>&nbsp;<br></div>
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100">
              <div class="Table">
                <?php
                include_once "../config.php";
                $sql = "SELECT * from employee as e, employee_address as eadd where e.ZipCode=eadd.ZipCode";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                $row = "";
                if ($resultCheck > 0) {
                  echo "<table>
                            <thead><tr>
                            <th>Employee ID</th>
                            <th>First Name</th>
                            <th>Middle name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Street Address</th>
                            <th>ZipCode</th>
                            <th>Email Address</th>
                            <th>Aadhaar Number</th>                            
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>Department ID</th>
                            <th>Highest Qualification</th>
                            <th>Date of Joining</th>
                            </tr></thead><tr></tr>";
                  echo "<tbody>";
                  while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['EID'] . "</td>";
                    echo "<td>" . $row['FName'] . "</td>";
                    echo "<td>" . $row['MName'] . "</td>";
                    echo "<td>" . $row['LName'] . "</td>";
                    echo "<td>" . $row['DOB'] . "</td>";
                    echo "<td>" . $row['StreetAdd'] . "</td>";
                    echo "<td>" . $row['ZipCode'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['MobileNo'] . "</td>";
                    echo "<td>" . $row['AadhaarNo'] . "</td>";
                    echo "<td>" . $row['Gender'] . "</td>";
                    echo "<td>" . $row['DID'] . "</td>";
                    echo "<td>" . $row['HighestQ'] . "</td>";
                    echo "<td>" . $row['DOJ'] . "</td>";
                    echo "</tr>";
                  }
                  echo "</table>";
                } else {
                  echo "<script>alert('Employee record is empty!!')</script>";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-lg btn-danger btn-all"><a href="../Landing.php" style="color: black;">Go Back</a></button>
      <div><br><br></div>
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