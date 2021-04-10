

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
                  <li  class="active">
                      <a  href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>accueil</span>
                      </a>
                  </li>
			
                               
                  <li class="active">
                      <a href="requet1.php">
                          <span>Liste􀆌 les 􀅶o􀅵s d’hôtels et leu􀆌 ville.</span>
       
                      </a>
                  </li>
                   <li class="">
                      <a href="requet2.php">
                          <span>les hôtels sur lesquels porte au moins une réservation.</span>
       
                      </a>
                  </li>
                           
                   <li class="">
                      <a href="requet3.php">
                          <span> les clients qui ont toujours séjourné au premier étage</span>
       
                      </a>
                  </li>
                  <li >
                      <a class="" href="requet4.php">
                          <span>les hôtels  qui offrent des suites</span>
                      </a>
                  </li>
                   <li >
                       <a class="" href="requet5.php">
                          <span>le t􀇇pe de 􀄐ha􀅵􀄏􀆌e ha􀄏ituelle􀅵e􀅶t le plus 􀆌􀄠se􀆌v􀄠 </span>
                      </a>
                  </li>
                   <li >
                       <a class="" href="requet6.php">
                          <span>le manque à gagner provoqué par les chambres inoccupées</span>
                      </a>
                  </li>
                   <li >
                       <a class="" href="requet7.php">
                          <span>Ajouter 1000 DA à tous les prix des chambres de classement 4 étoiles.</span>
                      </a>
                  </li>
                  
                  <li >
                       <a class="" href="requet8.php">
                          <span></span>
                      </a>
                  </li>
                   <li >
                       <a class="" href="requet9.php">
                          <span></span>
                      </a>
                  </li>
                  
               
                
                
				  
               
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  
	  
	  
	  
<section id="main-content">
          <section class="wrapper">          
          
          
         
                   
           
           
              
              <header class="panel-heading">
                              list des   HOTEL
                          </header>
                      <?php

             include 'conect.php';

//$query=  mysqli_query($con,"SELECT * FROM `sanse`");  
$query=  mysqli_query($con,"SELECT `numhotel`FROM `reservation` GROUP BY `numhotel`");

echo "";

$i2=0;                
//  oierient les etudient  choizi
  
echo "<table border=\"1\"  >";
     //   echo "<caption>  </caption>";
        echo " <thead><th>nom hotel</th><th>manque_total</th></thead>";
        
 
 
   
$query2=  mysqli_query($con," SELECT  (tab4.manque_des_chmbre_aumoin_unefois +tab3.manque )as  manque_total , tab3.numhotel ,tab4.numhotel FROM (SELECT sum(manque_de_des_chambre_ne_reserv_pas_tjr)as manque_des_chmbre_aumoin_unefois ,numhotel FROM(SELECT manque_de_des_chambre_ne_reserv_pas_tjr , numhotel FROM (SELECT ((365-SUM(DATEDIFF(reservation.datedepart, reservation.datearivee)))* chambre.prixnuit) as manque_de_des_chambre_ne_reserv_pas_tjr,reservation.numchambre,reservation.numhotel FROM reservation JOIN chambre WHERE chambre.numchambre=reservation.numchambre and chambre.numhotel =reservation.numhotel GROUP by numchambre,numhotel)as tab) as tab2 GROUP by numhotel)as tab4 JOIN(SELECT numhotel ,sum((chambre.prixnuit)*365) as manque FROM chambre WHERE chambre.numchambre not in( SELECT numchambre FROM (SELECT hotel.numhotel,chambre.numchambre FROM reservation join chambre JOIN hotel WHERE(hotel.numhotel=chambre.numhotel AND hotel.numhotel=reservation.numhotel and chambre.numchambre=reservation.numchambre ))as chmbre_resarve) and numhotel not in ( SELECT numchambre FROM (SELECT hotel.numhotel,chambre.numchambre FROM reservation join chambre JOIN hotel WHERE(hotel.numhotel=chambre.numhotel AND hotel.numhotel=reservation.numhotel and  chambre.numchambre=reservation.numchambre ))as chmbre_resarve) GROUP by numhotel) as tab3 where tab3.numhotel=tab4.numhotel");
        $max=0;
                   while ($row2= mysqli_fetch_array($query2)) {//1
                    //`numhotel``ville``nom``etoiles`
                    $manque_total =$row2[0]; 
      
                        $hotel=$row2[1];
						
              
                                                         echo "<tr><td>$hotel </td><td>$manque_total  </td> "
."</tr>";
}
                
             
 
 
 
      

echo "</table>";
?>
   
              
              
              
   
      </section>
      </section>
	  
	  
	  
	  
	  
	  
    
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