<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Bill Product</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- Sweetalert-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>


<script>
  const Toast = Swal.mixin({
                  position: "center",
                  showConfirmButton: false,
                  timer: 3000
              });
  </script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Sale</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Purchase</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Stock</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Scrap Deal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <!--  <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("user")->User_Name?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>dashboard?page_name=dashboard_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "dashboard_page"){echo "active";}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview 
          <?php if(!empty($_GET["page_name"]) && ($_GET["page_name"] == "category_page" || $_GET["page_name"] == "item_page" || $_GET["page_name"] == "vendor_page" || $_GET["page_name"] == "voucher_master")){echo "menu-open";}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>category?page_name=category_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "category_page"){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>item?page_name=item_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "item_page"){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Item</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url()?>customer?page_name=customer_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "customer_page"){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale Party</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url()?>vendor?page_name=vendor_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "vendor_page"){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Party </p>
                </a>
              </li>
            <li class="nav-item">
            <a href="<?php echo base_url()?>voucher?page_name=voucher_master" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "voucher_master"){echo "active";}?>">
              <i class="fas fa-clipboard nav-icon"></i>
              <p>
                Voucher
              </p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-item has-treeview 
          <?php if(!empty($_GET["page_name"]) && ($_GET["page_name"] == "direct_sale" || $_GET["page_name"] == "sale_page" || $_GET["page_name"] == "sale_old_page" || $_GET["page_name"] == "customer_page")){echo "menu-open";}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Sale
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo base_url()?>new_bill?Sale_Id=0&page_name=sale_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "sale_page"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                  <p>New</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url()?>old_bill?page_name=sale_old_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "sale_old_page"){echo "active";}?>">
              <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>

               <li class="nav-item">
              <a href="<?php echo base_url()?>direct_sale?page_name=direct_sale" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "direct_sale"){echo "active";}?>">
              <i class="far fa-circle nav-icon"></i>
                  <p>Direct Sale</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item has-treeview 
          <?php if(!empty($_GET["page_name"]) && ($_GET["page_name"] == "purchase_page" )){echo "menu-open";}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Purchase 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo base_url()?>purchase?page_name=purchase_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "purchase_page"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                  <p>New</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>staff?page_name=staff" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "staff"){echo "active";}?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Employee
              </p>
            </a>
          </li> <li class="nav-item">
            <a href="<?php echo base_url()?>stock?page_name=stock" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "stock"){echo "active";}?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Go Down Stock
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>voucher_expences?page_name=expenses" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "expenses"){echo "active";}?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Expenses
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url()?>accounting?page_name=account_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "account_page"){echo "active";}?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Account
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url()?>profile?page_name=profile_page" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "profile_page"){echo "active";}?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview 
          <?php if(!empty($_GET["page_name"]) && ($_GET["page_name"] == "user" || $_GET["page_name"] == "user_permission" )){echo "menu-open";}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo base_url()?>users?page_name=user" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "user"){echo "active";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>

               <li class="nav-item">
            <a href="<?php echo base_url()?>userpermission?page_name=user_permission" class="nav-link <?php if(!empty($_GET["page_name"]) && $_GET["page_name"] == "user_permission"){echo "active";}?>">
             <i class="far fa-circle nav-icon"></i>
              <p>
                User Permission
              </p>
            </a>
          </li>
          
             
             
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url()?>login/logout" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php if(!empty($page)){
    $this->load->view($page);
  }
    ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong><a href="https://electroinfotech.com">electroinfotech</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>
</div>
<!-- ./wrapper -->


</body>
</html>
