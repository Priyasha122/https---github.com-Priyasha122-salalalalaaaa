<?php
include("../includes/db_conn.php");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Home </title>
  <link rel="stylesheet" href="../css/style3.css">





  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
  <?php include 'po_sidebar.php' ?>

  <section class="home-section">
    <?php include '../Includes/navbar.php' ?>



    <form action="po_dashboard.php" method="POST">
      <div class="searchbar">
        <input type="input" placeholder="Search the Licence Number" class="searchfield" name="id">
        <input type="submit" class="searchbt" name="search" value="search">
    </form>
    </div>

    <?php
    if (!isset($_POST['search'])) { ?>
      <h3 class="i-name">
        Overview
      </h3>
      <div class="values">
        <div class="val-box">
          <span class="material-symbols-outlined">
            <i class='bx bx-user'></i>
          </span>
          <div>
            <h3>Remaining Points</h3>
            <input type="text" class="val-field" value="" />
          </div>
        </div>



        <div class="val-box">
          <span class="material-symbols-outlined">
            <i class='bx bx-id-card'></i>


          </span>
          <div>
            <h3>Account Status</h3>
            <input style="color:green;" type="text" class="val-field" value="" />
          </div>
        </div>

        <div class="val-box">
          <span class="material-symbols-outlined">
            <i class='bx bxs-error'></i>
          </span>
          <div>
            <h3>Total Violation</h3>
            <input type="text" class="val-field" value="" />
          </div>
        </div>
        <dir class="board">
          <div class="val-box2">
            <table class="overview-table" width="100%">
              <tbody>
                <tr class="overview-tr">
                  <td>Name</td>
                  <td><input type="text" class="oview_col" name="name" value="" /></td>
                </tr>

                <tr class="overview-tr">
                  <td>NIC Number</td>
                  <td> <input type="text" class="oview_col" name="NIC" value="" /></td>
                </tr>

                <tr class="overview-tr">
                  <td>Licence Number</td>
                  <td><input type="text" class="oview_col" name="LicenceNo" value="" /></td>
                <tr>
              </tbody>
            </table>

             






      <?php
    }
      ?>




      <?php


      if (isset($_POST['search'])) {
        $id = $_POST['id'];

        $query = "SELECT* FROM driver where Licence_No= '$id'";
        $query_run = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($query_run)) {
          $pointBalance = $row['Point_Balance'];
          $AccountStatus = $row['Account_Status'];
          $Vilations = $row['Violations'];
          
          $name = $row['Name'];
          $NIC = $row['Nic_No'];
          $licenceNo = $row['Licence_No'];
        }

      ?>




        <h3 class="i-name">
          Overview
        </h3>
        <div class="values">
          <div class="val-box">
            <span class="material-symbols-outlined">
              <i class='bx bx-user'></i>
            </span>
            <div>
              <h3>Remaining Points</h3>
              <input type="text" class="val-field" value="<?php echo $pointBalance ?>" />
            </div>
          </div>



          <div class="val-box">
            <span class="material-symbols-outlined">
              <i class='bx bx-id-card'></i>


            </span>
            <div>
              <h3>Account Status</h3>
              <input type="text" class="val-field" value="<?php echo $AccountStatus ?>" />
            </div>
          </div>

          <div class="val-box">
            <span class="material-symbols-outlined">
              <i class='bx bxs-error'></i>
            </span>
            <div>
              <h3>Total Violation</h3>
              <input type="text" class="val-field" value="<?php echo $Vilations ?>" />
            </div>
          </div>




          <dir class="board">

            <div class="val-box2">
              <table class="overview-table" width="100%">
                <tbody>
                  <tr class="overview-tr">
                    <td>Name</td>
                    <td><input type="text" class="oview_col" name="name" value="<?php echo $name ?>" /></td>
                  </tr>

                  <tr class="overview-tr">
                    <td>NIC Number</td>
                    <td> <input type="text" class="oview_col" name="NIC" value="<?php echo $NIC ?>" /></td>
                  </tr>

                  <tr class="overview-tr">
                    <td>Licence Number</td>
                    <td><input type="text" class="oview_col" name="LicenceNo" value="<?php echo $licenceNo ?>" /></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </dir>

          <button class="btn1"><a href="addFine_form.php">Add Violation</button>

            <h3 class="i-name2">Violation History</h3>


            <div class="val-box2">
              <table class="overview-table" width="100%">
                <thead>
                  <tr class="overview-tr">
                    <td>Date</td>
                    <td>Violation ID</td>
                    <td>Amount</td>
                    <td>Type</td>
                  </tr>


                </thead>
                <tbody>
                  <tr class="overview-tr">
                    <td><input class="oview_col"></td>
                    <td><input class="oview_col"></td>
                    <td><input class="oview_col"></td>
                    <td><input class="oview_col"></td>


                  </tr>
                </tbody>


              </table>
            </div>
        </dir>
        <?php

      }

        ?>
       </div>
       
       
  </section>

  <script src="../js/script.js"></script>



</body>

</html>