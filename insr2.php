<?php
 session_start();

 
 
$date_arivee=$_SESSION['datearv'];
$date_depart= $_SESSION['datedp'];
echo "$date_arivee /////$date_depart";
?>
  



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>espace amine</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

   
    <style>
        .aa{
            color: red;
        }
        
        
           .bb{
            color:green;

        }
        
        
    </style>
  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="espace admin.php" class="logo">espace <span class="lite">amin </span></a>
            <!--logo end-->

           

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                            <img alt="" src="img/AAA.jpg">
                            </span>
                            <span class="username">
                       OULD LARBI AMINE  
                            
                      </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profilead.php"><i class="icon_profile"></i> Profile</a>
                            </li>
                            <li>
                                <a href="index.php"><i class="icon_key_alt"></i> déconnecter</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
      </header>    
      <!--header end-->

      <!--sidebar start--> 
     <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li >                                                      
                      <a class="" href="espace admin.php">
                          <i class="icon_house_alt"></i>
                          <span>accueil</span>
                      </a>
                  </li>
			
                               
                  <li class="">
                      <a href="insh.php">
                          <span>insert hotel</span>
       
                      </a>
                  </li>
                   <li class="">
                      <a href="insch.php">
                          <span>insert chambre</span>
       
                      </a>
                  </li>
                           
                   <li class="">
                      <a href="inscl.php">
                          <span>insert client</span>
       
                      </a>
                  </li>
                  <li   class="active" >
                      <a  href="insr.php">
                          <span>insert reservation</span>
                      </a>
                  </li>
               
                
                
		                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
<section id="main-content">
          <section class="wrapper">
                  
                              
                                    
                                     
             <?php
             include 'conect.php';

$cl=$_POST['cl'];
 $hotel=$_POST['h'];

 //echo "$cl:::$hotel";
 $array=explode('-', $hotel);
// print_r($array);
 $numhotel=$array[0];
 $numchambre=$array[1];
 //echo $numchambre+$numhotel;
$i=0;
$sql="INSERT INTO `reservation` (`numclient`, `numhotel`, `datearivee`, `datedepart`, `numchambre`) VALUES ('$cl', '$numhotel', '$date_arivee', '$date_depart', '$numchambre');";
$qry=mysqli_query($con,$sql);
if ($qry){
   echo "INSERT INTO `reservation` (`numclient`, `numhotel`, `datearivee`, `datedepart`, `numchambre`) VALUES ('$cl', '$numhotel', '$date_arivee', '$date_depart', '$numchambre');";
 
}
        


?>    
                               
                                            
                                              
               
          </section></section>
     
      
       <!--                                  *************************************************************************************************************************************
                                          *************************************************************************************************************************************--!->
       <!--                                  *************************************************************************************************************************************
                                          *************************************************************************************************************************************--!-->
    <!--                                  *************************************************************************************************************************************
                                          *************************************************************************************************************************************--!-->
    <!--                                  *************************************************************************************************************************************
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!-- colorpicker -->
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  </body>
</html>
