<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Home </title>
  <link rel="stylesheet" href="../css/style3.css">

</head>

<body>



  <div class="sidebar close">
    <div class="logo-details">
      <a href="dashboard4.php"><i class='bx bx-taxi'></a></i>
      <span class="logo_name">E-Fine</span>
    </div>

    <ul class="nav-links">
      <div class="current">
        <li>
          <a href="po_dashboard.php">
            <i class='bx bx-grid-alt'></i>
            <span class="link_name">Overview</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="po_dashboard.php">overview</a></li>
          </ul>
        </li>
      </div>



      <li>
        <div class="iocn-link">
          <a href="po_profile.php">
            <i class='bx bx-user'></i>

            <span class="link_name">Profile</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="po_profile.php">Profile</a></li>
          <li><a href="#">Change Details </a></li>

        </ul>
      </li>

      <li>
        <a href="report_problem.php">
          <i class='bx bx-error'></i>
          <span class="link_name">Report a Problem</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="report_problem.php">Report a Problem</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="../Images/profile.png" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Priyasha </div>
            <div class="job">Police Constable(PC-2296)</div>
          </div>
          <a href="login2.php"> <i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>

  

</body>

</html>