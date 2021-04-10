
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
                  
     
              <header class="panel-heading">
                              ajouter  reservation
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="insr2.php" novalidate="novalidate">
                                      <div class="form-group ">                         
                                          <br><br><br><br>
                                          <label for="cname" class="control-label col-lg-2"> num client   <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="cl">
                                     
             <?php
			 <?php
 session_start();

 
 
$date_arivee=$_post['datearv'];
$date_depart= $_post['datedp'];
$_SESSION['datearv']=$date_arivee;
$_SESSION['datedp']=$date_depart;
echo "$date_arivee /////$date_depart";
?>
  
  include 'conect.php';   
$v2=  mysqli_query($con,"SELECT * FROM `client` WHERE 1");
while ($row = mysqli_fetch_assoc($v2)) {
   $nom=$row['nom'];
   $prenom=$row['prenom'];
    $nn=$row['num_client'];
   
   echo " <option value=\"$nn\">$nom  $prenom et son num et : $nn</option>";
   
  
}




?>    
                                              </select>
                                          </div>    <br><br><br>                                           <label for="cname" class="control-label col-lg-2"> hotel  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                                               
                                                    <?php

                                                
include 'conect.php';


         
                                                     
                                                     echo " <select name=\"h\">";                                     

$v2=  mysqli_query($con,"SELECT `nom`,`numhotel` FROM `hotel` WHERE 1");
while ($row = mysqli_fetch_assoc($v2)) {
   $nom=$row['nom'];
    $nn=$row['numhotel']; 
//********************************************************************************************************************************************************************************************  
// SELECT * FROM `chambre` WHERE `numhotel` = 1 AND numchambre not in (SELECT numchambre FROM reservation where numhotel=1  and  AND datearivee BETWEEN 03/042018 and 10/04/2018)*************
 //******************************************************************************************************************************************************************************************* 
 
    
          //echo " <option value=\"$nn-$numchambre\" class=\"\">hotel: $nom numero chambre pas desponible</option>";

  
  $v=  mysqli_query($con,"SELECT * FROM `chambre` WHERE numhotel=$nn ");
    
        

    
    
while ($row = mysqli_fetch_assoc($v)) {
 $numchambre=$row['numchambre'];
 $num=$row['numhotel'];
  $tp=$row['type'];
   $etage=$row['etage'];
   //    echo " <option value=\"$nn-$numchambre\" class=\"aa\">hotel: \$nom numero chambre \$numchambre  pas desponible</option>";


         
 $vv=  mysqli_query($con,"SELECT `datearivee`,`datedepart`  FROM `reservation`  WHERE ((`datearivee` BETWEEN '$date_arive' and '$date_depart')or( `datedepart` BETWEEN '$date_arive' and '$date_depart') )  and (`numhotel`=$nn) and (`numchambre`=$numchambre)");
 $r= mysqli_fetch_assoc($vv);
 if ( $r){
      echo " <option value=\"$nn-$numchambre\" class=\"aa\">hotel: $nom numero chambre $numchambre  pas desponible</option>";
}
 else {
 echo " <b><option value=\"$nn-$numchambre\"  class=\"bb\">hotel: $nom numero chambre $numchambre  etage $etage $type desponible</option></b>";
    
} 
          
          
          
 
 
}

  }
?>                   </select>
                                          </div>    <br><br><br>
                                            
                                              
                                              
                
                     
                 <br><br><br>
                                
                                          
                                          
                           <br><br><br>                  
                            <br><br>       
                                          </div>
                              </div>      
                                  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">enregistrer</button>
                                              <button class="btn btn-default" type="reset">Annuler</button>
                                          </div>
                                      </div>
                                  </form> </div> </div>         
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
