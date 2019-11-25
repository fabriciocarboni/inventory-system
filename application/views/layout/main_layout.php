<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php $this->load->view('include/styles'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('include/header'); ?>

<?php $this->load->view('include/sidebar'); ?>



  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($page_content); ?>
  
  
  <?php $this->load->view('include/footer'); ?>

  
</div>
<!--include footer -->
<?php $this->load->view('include/scripts'); ?>
</body>
</html>
