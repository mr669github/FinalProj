<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FINAL WSD PROJECT!</title>
   <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/fontastic.css">
    
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim:300,400,700">
  
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    
    <link rel="stylesheet" href="css/custom.css">
   
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      //Navigation Bar
    <header class="header">
        <nav class="navbar">
          
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
             
              <div class="navbar-header">
                <a href="https://www.njit.edu/graduatestudies/degree-programs/graduatecertificates/web-systems-development-cert/" class="navbar-brand">
                  <div class="brand-text brand-big"><span>WSD </span><strong> ToDo Task Admin </strong></div>
                  <div class="brand-text brand-small"><strong>TD</strong></div></a>
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
               

                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
                
                <li class="nav-item">

                 <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
                 <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
                 </form>
                            
                 <form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
                 <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>
                 </li>
                 </form>                            
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
       
        <nav class="side-navbar">
          
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="" class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Monisha Ramesh</h1>
            </div>
          </div>
          
          <span class="heading">Main</span>
          <div>
           <ul class="list-unstyled">
            <form action="index.php?page=tasks&action=create" method="POST" style="float:left;">
            <button class="btn btn-link navbar-btn" class="icon-interface-windows" type="submit"></i>Create Task</button>
            </form></ul>
          </div>

            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>W </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="https://web.njit.edu/~mr669/ractiverec/">Refactor Active</a></li>
                <li><a href="https://web.njit.edu/~mr669/project1/">Project1</a></li>
                
              </ul>
            </li>
           
        </nav>
        <div class="content-inner">
         
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
       
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                         
         <?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>
                     
                
          
        </div>
      </div>
    </div>

   
  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    


<script src="js/scripts.js"></script>
</body>
</html>


<script src="js/scripts.js"></script>
</body>
</html>