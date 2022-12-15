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
<?php include 'rmv_sidebar.php' ?>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <div class="right-side-items">
                <i class='bx bx-bell'></i>
                <div class="profile">
                    <img src="image/1.jpg" alt="">
                </div>
            </div>
        </div>

   
      <h3 class="i-name">
        Overview
      </h3>
      <div class="values">
        <div class="val-box">
          <span class="material-symbols-outlined">
            <i class='bx bx-mail-send'></i>
          </span>
          <div>
            <h3>Requests</h3>
            <input type="text" class="val-field">
          </div>
        </div>



        <div class="val-box">
          <span class="material-symbols-outlined">
            <i class='bx bx-id-card'></i>


          </span>
          <div>
            <h3>Suspended Licence</h3>
            <input type="text" class="val-field">
          </div>
        </div>

       

        <div class="container">
                    <div class="table">
                        <table class="overview-table">
                            <thead>
                                <tr>
                                    <th>Request Id</th>
                                    <th>Police Station</th>
                                    <th>Driving Licence</th>
                                    <th>Owner's Name</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="overview-tr">
                                <th>130</th>
                                <th>Gampaha</th>
                                    <th>B64527782</th>
                                    <th>M.K.D.K. Jayathilaka</th>
                                    <th><button class="suspend">Accept</button></th>
                                    <th><button class="reject">Reject</button></th>
                                    
                              </tr>

                              <tr class="overview-tr">
                                <th>131</th>
                                <th>Colombo</th>
                                    <th>B645256752</th>
                                    <th>G.K.Kumara</th>
                                    <th><button class="suspend">Accept</button></th>
                                    <th><button class="reject">Reject</button></th>
                                    
                              </tr>

                              <tr class="overview-tr">
                                <th>132</th>
                                <th>Colombo</th>
                                    <th>B645256778</th>
                                    <th>G.K.Sathyangani</th>
                                    <th><button class="suspend">Accept</button></th>
                                    <th><button class="reject">Reject</button></th>
                                    
                              </tr>
                            </tbody>
                            
                        </table>
                    </div>

</div>
  </section>

  <script src="../js/script.js"></script>



</body>

</html>