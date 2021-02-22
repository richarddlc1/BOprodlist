<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else {  
?>  


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<title>Backoffice Company Products Guide</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='css/font1.css' rel='stylesheet' type='text/css'>
<link href='css/font2.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--New table-->
<link href="css/table.css" rel="stylesheet">   
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" 
href="css/dataTables.min.css">
<script type="text/javascript" 
src="js/dataTables.min.js"></script>
<script type="text/javascript" 
src="js/bootstrap2.min.js"></script>
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Providing the Best Value<br><span class="name">to All the Lives We Touch</span></h1>
          <p>Product List Guide for Backoffice</p>
          <a href="http://www.philchema.com" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
      <!--<img class = "navimg" src= "img/Compant%20Logos%20in%201%20image.png" alt="Philnutri | Philchema | Agriterra">-->
      <h2 style="color:white">Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php" style="color:lightblue">| Logout</a> 
     <!-- <h2 class="welcome" style="color:white;font-size: 30px">Welcome, <?=$_SESSION['sess_user'];?>!
      <a href="logout.php" style="color:lightblue;font-size: 30px;margin-left: 25px">| Logout</a> -->
      <a class="References" href="terms.php">Appendix</a> </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      </div>
    </div>
  </nav>
</div>
    
    <!--Start of table-->
    
    <table id="myTable" class="table table-striped" >   
        <thead>  
          <tr>  
            <th>Product Name</th>  
            <th>Supplier, Country</th>  
            <th>Division</th>  
            <th>Packaging</th> 
            <th>Inclusion</th>
            <th>Basic Description</th>
          </tr>  
        </thead>  
        <tbody id = 'tableBody'>  

        </tbody>  
      </table>  
    
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2021 RDLC</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/easypiechart.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/buildTable.js"></script>
</body>
</html>
<?php  
} 
?>