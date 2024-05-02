<?php 

  $item_count = $this->db->get("item")->num_rows();
  $customer_count = $this->db->get("customer")->num_rows();
  $this->db->select("Sale_Overall_Discount,sum((Item_Rate * Item_Qty) - ((Item_Rate * Item_Qty) * Item_Discount) /100) as day_sale");
  $this->db->where("date(Sale_Date) between '".date("Y-m-d")."' and '".date("Y-m-d")."'");
  $this->db->join("final_sale b","a.Sale_Id = b.Sale_Id");
  $this->db->group_by("a.Sale_Id");
  $result = $this->db->get("final_sale_head a")->result();
  $day_sale = 0;
  if(!empty($result))
  {
    foreach($result as $t){
      $day_sale += $t->day_sale - (($t->day_sale * $t->Sale_Overall_Discount)/100);
    }
  }
  
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-th"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Item</span>
                <span class="info-box-number">
                  <?php echo $item_count?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Purchase</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number"><?php echo $day_sale?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customer</span>
                <span class="info-box-number">
                <?php echo $customer_count?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->