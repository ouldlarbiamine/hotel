            


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
    
    
             <style>fieldset{
        background-color: white;
        width: 500px;
        border: 2px solid black;
            
            
}
    
    .aa7{margin: 10px; }
    table{
        color: black;
                width: 1100px;

        
    }
    </style>

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
                      <a  href="indext.php">
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
                      <a href="insert.php">
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
                   <li >
                       <a class="" href="mis_cl.php">
                          <span>afiche table client </span>
                      </a>
                  </li>
                   <li >
                       <a class="active" href="mis_hotel.php">
                          <span>afiche table hotel</span>
                      </a>
                  </li>
                   <li >
                       <a class="" href="mis_chambre.php">
                          <span>afiche table chabre</span>
                      </a>
                  </li>
                  
                  <li >
                       <a class="" href="mis_reserv.php">
                          <span>afiche table resarvation</span>
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

//$query=  mysqli_query($con,"SELECT * FROM `sanse`");
$query=  mysqli_query($con,"SELECT * FROM `hotel`");

$i2=0;                
//  oierient les etudient  choizi
  
echo "<table border=\"1\"  >";
     //   echo "<caption>  </caption>";
        echo "<tr><td>  num hotel </td><td>nom  </td> <td>ville </td> <td>etoiles</td> <td>action</td></tr>";
     
while ($row= mysqli_fetch_assoc($query)) {//1
    //`numhotel``ville``nom``etoiles`
    $nom=$row['nom']; $num2=$row['numhotel'];  
     $vil=$row['ville'];
     $etoil=$row['etoiles'];
     $num1=$num2;

                    
                  
                   


                                      
                                          
                                                 echo "<tr><td>  $num2 </td><td>$nom  </td> <td>$$vil</td><td>$etoil</td> <td>"
. " <div class=\"btn-group\"><a class=\"btn btn-primary\"   href=\"modef_h.php?fr=$num2&nom=$nom&ville=$vil&etoil=$etoil\"><i class=\"icon_check_alt2\"  ></i>modefier</a> "
. "    <a class=\"btn btn-danger\"   href=\"sup_h.php?fr=$num2&rb=$num1\"><i class=\"icon_close_alt2\"  ></i>&nbspsuprimier</a> ";

           echo "</td> </tr></div>" 
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

                     