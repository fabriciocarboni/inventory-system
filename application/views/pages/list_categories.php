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
        <form action="javascript:void(0)">
            <div class="form-group">
                <label for="txt_add_name">Name:</label>
                <input type="text" class="form-control" id="txt_add_name" name="txt_add_name">
            </div>
            <div class="form-group">
                <label for="dd_status">Status:</label>
                <select name="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>            

        <button type="submit" class="btn btn-default">Submit</button>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>