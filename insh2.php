


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
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
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
			
                               
                  <li class="active">
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
                  <li >
                      <a class="" href="insr.php">
                          <span>insert reservation</span>
                      </a>
                  </li>
               
                
                
		                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    
      <!--                                  *************************************************************************************************************************************
     
     !-->
      
      
      
       <!--                                  *************************************************************************************************************************************
                                          *************************************************************************************************************************************--!-->
   
                            
   
      
      
      <section id="main-content">
          <section class="wrapper">
                 

                       
                                      
                                      
                                         
                 
      <?php

include 'conect.php';
    
$nomhotel=$_POST['nomh'];
$nomvil=$_POST['nomv'];
$etoil=$_POST['nt'];

     
            
$v2=  mysqli_query($con,"SELECT max(numhotel) FROM hotel where 1");
$roww2= mysqli_fetch_row($v2);
$vv2=$roww2[0];

    $nm=$vv2;

$nm++;


echo "INSERT INTO `hotel` (`numhotel`, `nom`, `ville`, `etoiles`) VALUES ('$nm', \"$nomhotel\", \"$nomvil\", '$etoil');";
$qry=mysqli_query($con,"INSERT INTO `hotel` (`numhotel`, `nom`, `ville`, `etoiles`) VALUES ('$nm', \"$nomhotel\", \"$nomvil\", '$etoil');");

// INSERT INTO `sanse` (`rb`, `fr`, `date`) VALUES ('1', '3', '2018-03-08');
 //echo "$date";






?>
 
              
              
              
              
              
              
              
              
          </section></section>
      
      

      
      
      
      
      
       <!--                                  *************************************************************************************************************************************
                                          *************************************************************************************************************************************--!-->
   
      
      
                 
    
      
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
