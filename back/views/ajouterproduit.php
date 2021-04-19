<?php
    include_once 'produit.php';
    include_once 'produitC.php';

    $error = "";

    // create user
    $c = null;
    $cc = new produitC();
    // create an instance of the controller
    
    if (isset($_POST["idProduit"]) &&
        isset($_POST["nomPrdt"]) && 
        isset($_POST["type"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["dateExpr"])&&
        isset($_POST["quantite"])

    ) {
        if (
            !empty($_POST["idProduit"]) && 
            !empty($_POST["nomPrdt"]) && 
            !empty($_POST["type"])&&
            !empty($_POST['prix']) &&
            !empty($_POST['dateExpr']) &&
            !empty($_POST['quantite']) 

            )
         {
            $c = new produit(
                $_POST['idProduit'],
                $_POST['nomPrdt'], 
                $_POST['type'],
                $_POST['prix'],
                $_POST['dateExpr'],
                $_POST['quantite']
                );
            echo 'selket';
            $cc->ajouterproduit($c);
            
           // header('refresh:5;url=afficherproduit.php');        }
        else
        {
            $error = "Missing information";
            echo 'alert("missing information")';
           
        }
    }

    
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cuisinette Admin</title>
  <style type="text/css">
  .main-panel{
    padding: 10px;
    border: 1;
    margin-left: 40px;
    margin-right: 40px;
    background-color: black;
    margin-top: 40px;

  }
  </style>
  <!-- plugins:css -->
  <link rel="stylesheet" href="views/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="views/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="views/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="views/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="views/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="views/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="views/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="views/images/favicon.ico">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="views/images/logo.png" alt="logo"></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="views/images/logo-mini.svg" alt="logo"></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="views/images/faces/melek.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">melek boussif</h5>
                <span></span>
          </div>
      </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items active">
          <a class="nav-link" href="index.html">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Gestion des produits</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic" style="">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="ajouter produits.html">Ajouter produits</a></li>
              <li class="nav-item"> <a class="nav-link" href="modifier produits.html">Modifier produits</a></li>
              <li class="nav-item"> <a class="nav-link" href="afficher produits.html">Consulter produits</a></li>
            </ul>
          </div>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Gestion des promotions</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic" style="">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="ajouter promotions.html">Ajouter promotions</a></li>
              <li class="nav-item"> <a class="nav-link" href="modifier promotions.html">Modifier promotions</a></li>
              <li class="nav-item"> <a class="nav-link" href="afficher promotions.html">Consulter promotions</a></li>
            </ul>
          </div>
        </li>





      </ul>
    </nav>

      


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="views/images/logo-mini.svg" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-view-grid"></i>
              </a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="views/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="views/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="views/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">4 new messages</p>
              </div>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Event today</p>
                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Launch Admin</p>
                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">See all notifications</p>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="views/images/faces/melek.png" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Amine Aouididi</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">Advanced settings</p>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  
                </div>
              </div>
            </div>
          </div>
          
                    </div>


                    <div class="right_col" role="main" >
                      <!-- top tiles -->
                     <table class="table">
                       
                        
                       <form class="form" >
                       <tr>
                       <td colspan="2">
                        <input type="hidden" name="photo" >
                      </td>
                     </tr>
                   
                    
                       <td>idProduit : </td><td><input type="text" name="idProduit" class="form-control"> </td>
                       </tr>
                       <tr><td>nomPrdt : </td><td><input type="text" name="nomPrdt" class="form-control" > </td>
                       </tr>
                        <tr><td>type : </td><td><input type="text" name="type" class="form-control"  > </td>
                       </tr>
                       <tr><td>prix : </td><td><input type="text" name="prix" class="form-control"  > </td>
                       </tr>
                       <tr><td>dateExpr : </td><td><input type="text" name="dateExpr" class="form-control"  > </td>
                       </tr>
                       <tr><td>quantite : </td><td><input type="text" name="quantite" class="form-control"  > </td>
                       </tr>
                       
                     
                        <tr>
                            <td colspan="2">  <button type="submit" class="form-control" name="Ajouter">
                                                        ajouter
                                                    </button></td>
                        </tr>
                       </form>
                         
                     </table>
                     </div>





                  </div>
                </div>
              </div>
            
          
          
          
                          
                          
                            
                            
                          
                        
                      
                    
                  
                
              
            
          
          
            
          
          
        
       
        <!-- partial -->
      
      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->
  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="views/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="views/vendors/chart.js/Chart.min.js"></script>
  <script src="views/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="views/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="views/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="views/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="views/js/off-canvas.js"></script>
  <script src="views/js/hoverable-collapse.js"></script>
  <script src="views/js/misc.js"></script>
  <script src="views/js/settings.js"></script>
  <script src="views/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="views/js/dashboard.js"></script>
  <!-- End custom js for this page -->

<div class="jvectormap-tip"></div></body></html>