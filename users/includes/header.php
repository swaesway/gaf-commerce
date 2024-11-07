<?php 


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/bus.png" rel="icon">
  <link href="../../assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/addproduct.css" rel="stylesheet">
  <link href="../../assets/css/contactUs.css" rel="stylesheet">
</head>

<style>
  .header{
    background-color: #0a2d02;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <img src="../../uploads/logo.png" alt="">
        <span class="d-none d-lg-block text-white"><small>GAF-MARKET</small></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-white"></i>
    </div><!-- End Logo -->

    <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary btn-sm text-white" type="submit">Search</button>
    </form>
  </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-cart text-white"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->
<!-- 
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text text-white"></i>
            <span class="badge bg-success badge-number"></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <!-- <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src.="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src.="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li> -->

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/avatar.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6></h6>
              <span>John Doe</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Dashboard.php?action=signout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar"> 

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="bi bi-house-fill"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

          <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-funnel-fill"></i><span>Filter Products</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <!-- Price Filter Button -->
            <button class="btn btn-link nav-link bg-transparent ms-3" data-bs-toggle="modal" data-bs-target="#priceFilterModal">
                <i class="bi bi-cash" style="font-size: large;"></i><span style="font-size: 14px;">Price</span>
            </button>
          </li>
          <li>
            <!-- Category Filter Button -->
            <button class="btn btn-link nav-link bg-transparent ms-3" data-bs-toggle="modal" data-bs-target="#categoryFilterModal">
                <i class="bi bi-bar-chart-line " style="font-size: large;"></i><span style="font-size: 14px;">Categories</span>
            </button>
          </li>
      </ul>
    </li>
      <!-- End resources Nav -->
            <li class="nav-item">

      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cart-plus-fill"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="addproduct.php">
            <i class="bi bi-plus-circle-fill" style="font-size: large;"></i><span>Add Product</span>
          </a>
        </li>
        <li>
          <a href="myproduct.php">
            <i class="bi bi-cart3" style="font-size: large;"></i><span>My Products</span>
          </a>
        </li>
      </ul>
      </li>

      <li class="nav-item">

        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-diagram-3-fill"></i><span>History</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="purchases.php">
              <i class="bi bi-bag-heart-fill" style="font-size: large;"></i><span>Purchases</span>
            </a>
          </li>
          <li>
            <a href="bookmarks.php">
              <i class="bi bi-bookmarks" style="font-size: large;"></i><span>Bookmarks</span>
            </a>
          </li>
        </ul>
      </li>
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#history-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="history-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="contactUs.php">
              <i class="bi bi-chat-left-text" style="font-size: large;"></i><span>Contact us</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-box-arrow-right" style="font-size: large;"></i><span>Logout</span>
            </a>
          </li>
        </ul> 
</li>

      





    </ul>

  </aside><!-- End Sidebar-->


<!-- Price Filter Modal -->
<div class="modal fade" id="priceFilterModal" tabindex="-1" aria-labelledby="priceFilterModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="priceFilterModalLabel">Filter by Price</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form>
               <div class="mb-3">
                  <label for="minPrice" class="form-label">Minimum Price</label>
                  <input type="number" class="form-control" id="minPrice" placeholder="Enter minimum price">
               </div>
               <div class="mb-3">
                  <label for="maxPrice" class="form-label">Maximum Price</label>
                  <input type="number" class="form-control" id="maxPrice" placeholder="Enter maximum price">
               </div>
               <button type="submit" class="btn btn-primary" >Apply Filter</button>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Category Filter Modal -->
<!-- Category Filter Modal with Radio Options -->
<div class="modal fade" id="categoryFilterModal" tabindex="-1" aria-labelledby="categoryFilterModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="categoryFilterModalLabel">Filter by Categories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form>
               <p>Select Categories:</p>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="electronics" name="category" value="electronics">
                  <label class="form-check-label" for="electronics">Electronics</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="footwear" name="category" value="footwear">
                  <label class="form-check-label" for="footwear">Footwear</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="food-stuffs" name="category" value="food-stuffs">
                  <label class="form-check-label" for="food-stuffs">Food Stuffs</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="clothing" name="category" value="clothing">
                  <label class="form-check-label" for="clothing">Clothing</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="grocery" name="category" value="grocery">
                  <label class="form-check-label" for="grocery">Grocery</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="home-appliances" name="category" value="home-appliances">
                  <label class="form-check-label" for="home-appliances">Home Appliances</label>
               </div>
               <button type="submit" class="btn btn-primary mt-3">Apply Filter</button>
            </form>
         </div>
      </div>
   </div>
</div>


  <?php
include('footer.php');
  ?>
