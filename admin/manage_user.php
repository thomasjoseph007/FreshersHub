<?php
require "../session.php";
require"../connect.php";
if(!getSession('email'))
{
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  
  <title>Job Stock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  
  <link rel="stylesheet" href="../assets/plugins/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <!-- Custom style -->
    <link href="../assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" id="jssDefault" href="../assets/css/colors/green-style.css">
    
  <style >
  .inner-header-title.blank {
    margin-top: 40px;
    margin-bottom: 20px;
    padding: 8px 20px;
    text-align: center;
    color: #ffffff;
    overflow: visible;
    border-bottom: 4px solid #11b719;
    background: #53bb13;
    background: -moz-radial-gradient(center, ellipse cover, #53bb13 0%, #11b719 100%);
    background: -webkit-radial-gradient(center, ellipse cover, #53bb13 0%,#11b719 100%);
    background: radial-gradient(ellipse at center, #53bb13 0%,#11b719 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53bb13', endColorstr='#11b719',GradientType=1 );
    background-size: cover;
}

h2.detail-title1 {
    border-left: 4px solid #07b107;
    width: 100%;
}
h2.detail-title1 {
  width: 36%;
    height: 48px;
    font-size: 25px;
    background: #1b0000;
    padding: 8px 20px;
    margin-top: -62px;
    margin-bottom: 37px;
    line-height: 1.6;
    border-radius: 2px;
    color: #f5f5f5;
    border-left: 3px solid #11b719;
}

.wrapper{
  min-height: 100vh;
}
#id
{
  font-size:45px;
  font-weight: 20%;
  font-color:black;
  font-family:Times New Roman;
  padding:20px;
  
  
}
table {
    border-collapse: collapse;
    width: 80%;
   
}
 td,th{
  font-size: 20px;
   
   
    padding: 15px;
    text-align: left;
    width:80px;
     background-color: #4CAF50;
    color: white;
}
tr:hover {background-color:#f5f5f5;}
</style>

  </head>
  <body>
     <div id="wrapper">
     <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
              <li>
                    <a href="admin_home.php">HOME</a>
                </li>
                <li>
                    <a href="add_city.php">ADD CITY</a>
                </li>
                <li>
                    <a href="add_district.php">ADD DISTRICT</a>
                </li>
                <li>
                    <a href="add_jobtype.php">ADD JOBTYPE</a>
                </li>
                <li>
                    <a href="education.php">ADD EDUCATION</a>
                </li>
                <li>
                    <a href="manage_user.php">MANAGE USER</a>
                </li>
                <li>
                    <a href="manage_company.php">MANAGE COMPANY</a>
                </li>
                <li>
                    <a href="change_password.php">CHANGE PASSWORD</a>
                </li>
                <li>
                    <a href="../logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Start Navigation -->
            <a href="#menu-toggle" class="" id="menu-toggle">
         <i class="fa fa-bars"></i>
      </a>
       <nav class="navbar navbar-default  navbar-light white bootsnav">
        <div class="container">     
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Start Header Navigation -->

          <div class="navbar-header">
            <a class="navbar-brand" href="company_home.php">
              <img src="../assets/img/logo.png" class="logo logo-scrolled" alt="">
            </a>
          </div>
        
          <div class="collapse navbar-collapse" id="navbar-menu">

            <br>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

              <li><a href="company_home.php">HOME</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul> 
          </div><!-- /.navbar-collapse -->

        </div>   
              
      </nav>
      <div class="clearfix"></div>
      <!-- End Navigation -->
      <div class="clearfix"></div>
      
      <!-- Header Title Start -->
     
      <div class="clearfix">
        
    
      <div style="background-image:url(../assets/img/banner-9.jpg);">  
           <form id="form1" name="form1" method="post" action="#" >
          <center>
      <h2 class="detail-title1">MANAGE USERS</h2>
      <br id="id"><a href="jobinfo.php?jobid='<?php echo $row['jobid'];?>'">More Info..</a>
      <table>  
      <tr>
        <th> NAME</th>
        <th> MOBILE</th>
        <th>EDUCATION</th>
        <th></th>
       </tr> 
            <!-- block company-->
      <?php
      $qury="select * from user_registration ";
      $result=mysqli_query($conn,$qury) or die("error");  
                                                                        
      while($row=mysqli_fetch_array($result))
    {
      ?>
    <tr>
        <td><?php echo $row[1].$row[2] ?></td>
        <td><?php echo$row[3]?></td>
        <td><?php echo$row[4]?></td>    
        </td>
        <td><a href="user_block.php?id='<?php echo $row[0];?>'"><input type="submit" name="submit" value="block"></a></td>
      </tr>
      
    <?php
  }
  ?></table>
</form>
         <div  style = "height:50px; width:990px; box-sizing:border-box;font-color:white;font-size: 20px;background-color: white;margin-bottom: 100px;margin-top: 350px;">
           <div  style = "height:50px; width:1000px; box-sizing:border-box;font-color:white;margin-bottom: 100px">
            Copyright Job Stock © 2017. All Rights Reserved
          </div>
        </div>
      </footer>
      <div class="clearfix"></div>
      <!-- Footer Section End -->
      <!-- Sign Up Window Code -->
      <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="tab" role="tabpanel">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
             <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
            </ul>
            </div>
             </div>
            </div>
            </div>
        </div>
      </div>   
      <!-- End Sign Up Window -->
      <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
      <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
          <li>
            <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
          </li>
          <li>
            <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
          </li>
        </ul>
      </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scripts
      ================================================== -->
      <script type="text/javascript" src="../assets/plugins/js/jquery.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/viewportchecker.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/bootsnav.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/select2.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/wysihtml5-0.3.0.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/bootstrap-wysihtml5.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/datedropper.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/dropzone.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/loader.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/slick.min.js"></script>
      <script type="text/javascript" src="../assets/plugins/js/gmap3.min.js"></script>
      
      <!-- Date dropper js-->
      <script src="http://themezhub.com/"></script>
      
      <!-- Custom Js -->
      <script src="../assets/js/custom.js"></script>
      
      <script>
        $('#company-dob').dateDropper();
      </script>
      <script src="../assets/js/jQuery.style.switcher.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#styleOptions').styleSwitcher();
          $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
        });
      </script>
      <script>
        function openRightMenu() {
          document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
          document.getElementById("rightMenu").style.display = "none";
        }

        function toggleSidebar(ref){
  document.getElementById("sidebar").classList.toggle('active');
}
     </script>
 </div id="wrapper">
  </body>
</html>
