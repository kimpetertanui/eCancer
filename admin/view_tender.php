<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Home|| Nandi County Project Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <ul>
      <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
      <li><i class="fa fa-phone"></i> +254 708 191 484</li>
      <li><i class="fa fa-envelope-o"></i> nandiinfo@domain.com</li>
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="login.html" title="Login">Login<i class="fa fa-lg fa-sign-in"></i></a></li>
      <li><a href="register.html" title="Sign Up">Sign Up<i class="fa fa-lg fa-edit"></i></a></li>
    </ul>
    </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left">
      <h1><a href="index.html">Nandi County Project Management System</a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="#">Source of Champions</a></div>
    </header>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/limaris.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Tenders</a>
          <ul>
            <li><a href="#">Web Design</a></li>
            <!-- <li><a href="pages/graphics.html">Graphics Design</a></li>
            <li><a href="pages/apps.html">Android App Development</a></li>
            <li><a href="pages/pos.html">Point of Sale Systems</a></li>
            <li><a href="pages/school.html">School Management systems</a></li>
            <li><a href="pages/articles.html">Article Writing</a></li> -->
          </ul>
        </li>
        <li><a class="drop" href="#">Products</a>
          <ul>
            <li><a href="#">Agriculture</a></li>
            
            <li><a href="#">Tourism</a></li>
          </ul>
        </li>
        <li><a href="http://limaris.co.ke/">About Us</a></li>
        <li><a href="#">Contact Us</a></li> 
        <li><a href="#">Terms And Conditions</a></li>
        <li><a href="#">Privacy</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->

 <!--start of form-->
<hr>
<div class="container pt-1">
 <!--start of form-->
<hr>
<div class="container pt-1">
 <?php 
$username = "root"; 
$password = ""; 
$database = "nandi"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tenders";
 
 
echo '<table border="0" class="table" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Tender Number</font> </td> 
          <td> <font face="Arial">Tender Name</font> </td> 
          <td> <font face="Arial">Sub-County</font> </td> 
          <td> <font face="Arial">Description</font> </td> 
          <td> <font face="Arial">Bid Amount</font> </td> 
           <td> <font face="Arial">Department</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["tender_no"];
        $field2name = $row["possible_answers"];
        $field3name = $row["correct_answer"];
        $field4name = $row["tender_details"];
        $field5name = $row["bid_amount"]; 
        $field6name = $row["department"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
      <!--   <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tea</td>
            <td>some tender desc</td>
            <td>For Agriculture etc</td>
            <td>Active</td>
            <td><button class="btn btn-primary">Apply</button></td>
          </tr>
        </tbody>
      </table> -->
</div>

  
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>