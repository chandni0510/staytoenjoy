<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">  
    <title>Stay to enjoy | <?php echo $page_title; ?></title>
	<?php echo include('header.php');?> 	
	<?php include('sidebar.php');?>
	<div class="page">
      <div class="page-header">
        <h1 class="page-title font-size-26 font-weight-100"><?php echo $page_title; ?></h1>
      </div>
	<?php 
  include (APPPATH.'/modules/admin/views/'.$page_name.'.php'); ?>
  </div>
	<?php include('footer.php');?>
 </body>
</html>
