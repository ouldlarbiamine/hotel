


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
			
                               
                  <li class="">
                      <a href="insh.php">
                          <span>insert hotel</span>
       
                      </a>
                  </li>
                   <li class="active">
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
                 
      
              <header class="panel-heading">
                              ajouter  chambre
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="insch2.php" novalidate="novalidate">
                                      <div class="form-group ">
                                        
                                       
                                          <br><br><br><br>
                                           <label for="cname" class="control-label col-lg-2"> hotel  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="h">
                                                    <?php

include 'conect.php';
    
$nomhotel=$_POST['nomh'];
$nomvil=$_POST['nomv'];
$etoil=$_POST['nt'];

     
            
$v2=  mysqli_query($con,"SELECT `nom`,`numhotel` FROM `hotel` WHERE 1");
while ($row = mysqli_fetch_assoc($v2)) {
   $nom=$row['nom'];
    $nn=$row['numhotel'];
   
   echo " <option value=\"$nn\">$nom</option>";
    
}




?>    
                                              </select>
                                          </div>    <br><br><br>
                                            
                                              
                                              
                                              
                    <label for="cname" class="control-label col-lg-2"> etage  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="tag" minlength="5" type="number" required="">
                                          </div>                          
                                        
                         <br><br><br>                  
                 <label for="cname" class="control-label col-lg-2">type chambre  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="typ">
                                                  <option value="simple">simple</option>
                                                  <option value="double">double</option>
                                                  <option value="triple">triple</option>
                                                  <option value="suite">suite</option>
                                                  <option value="autre">autre</option>
                                              </select>
                                          </div>      
                 <br><br><br>
         <label for="cname" class="control-label col-lg-2"> prixnuit  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="prix" minlength="5" type="number" required="">
                                          </div>                          
                                          
                                          
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
