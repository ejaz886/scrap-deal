<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Item </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th style="width: 80px;text-align: center;">Sr No</th>
                <th style="width: 100px;text-align: left;">Code</th>
                <th style="width: 200px;text-align: left;">Category</th>
                <th style="width: 300px;text-align: left;">Desc</th>
                <th style="width: 150px;text-align: left;">Stock</th>
              </tr>
              </thead>
              <tbody>
              
              <?php 
                
                $this->db->where("a.Item_Status","Active");
                $this->db->join("item_category b","a.Item_Category_Id = b.Item_Category_Id");
                $item = $this->db->get("item a")->result();
                $i = 1; 
                foreach($item as $c){?>

              <tr>
                <td class="text-center"><?php echo $i?></td>
                <td><?php echo $c->Item_Code.$c->Item_Id?></td>
                <td><?php echo $c->Item_Category_Name?></td>
                <td><?php echo $c->Item_Description?></td>
                <td><?php echo $c->Item_Stock?></td>
              </tr>
              <?php $i++; } ?>
               </tbody>
            </table>
          </div>
        </div>
      </div>
      </section>
    <!-- /.content -->
  </div>