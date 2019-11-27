<div class="content-wrapper" style="min-height: 926px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Categories
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a class="active">List Categories</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            
            <?php if($this->session->flashdata("success")) {
                  ?>
                  <div class="alert alert-success">
                    <?php echo $this->session->flashdata("success"); ?>
                  </div>
                <?php 
                } ?>
                <?php if($this->session->flashdata("error")) {
                  ?>
                  <div class="alert alert-danger">
                    <?php echo $this->session->flashdata("error"); ?>
                  </div>
                <?php
                } ?>


            <div class="panel panel-primary">
                <div class="panel-heading">List Categories
                    <button id="btn-add-category" data-toggle="modal" data-target="#category-model" class="btn btn-warning pull-right btn-placement-class">Add Category</button>
                </div>
                <div class="panel-body">
                <table id="list-categories" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
                </div>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Modal -->
<div id="category-model" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Category</h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0)" class="validate-custom-form-error" id="frm-add-category" method="post">
            <div class="form-group">
                <label for="txt_add_name">Name:</label>
                <input type="text" class="form-control" required id="txt_add_name" name="txt_add_name">
                <!--<label id="txt_add_name-error" class="error" for="txt_add_name">This field is required</label>-->
            </div>
            <div class="form-group">
                <label for="dd_status">Status:</label>
                <select class="form-control" name="dd_status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>            
        <button type="submit" class="btn btn-success">Submit</button>
        </form> 
      </div>
    </div>

  </div>
</div>