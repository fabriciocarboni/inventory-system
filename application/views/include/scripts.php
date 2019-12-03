<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- jQuery validate -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

<script>
$(function(){
    //list categories
    $('#list-categories').DataTable();

    $('#frm-add-category').validate({
      //submite handler function
      submitHandler:function(){

        //collect all form data inside this variable
        //.serialize(), serializes all data comming from the form
        var postdata = $('#frm-add-category').serialize()+"&action=save_category";
        //submission url
        $.post("<?php echo site_url('inventory-ajax') ?>", postdata, function(response){
          location.reload();
        });

      }
    });
  
    //if the current open page contains btn-edit-category button
    if($(".btn-edit-category").length > 0){
      $(".btn-edit-category").on("click",function(){
        $("#modal-title").text("Update Category");
        
        var category_id = $(this).attr("data-id");

        var postdata = "category_id="+category_id+"&action=get_category";

        $.post("<?php echo site_url('inventory-ajax') ?>",postdata,function(response){
          
          var data = $.parseJSON(response);

          $("#txt_add_name").val(data.arr.data.name);
          $("#edit_id").val(data.arr.data.id);
          $("#opt_type").val("edit");
          $("#dd_status option[value='"+data.arr.data.status+"']").attr("selected",true);

              $("#category-modal").modal();
         });
      });
    }









  
});
</script>

