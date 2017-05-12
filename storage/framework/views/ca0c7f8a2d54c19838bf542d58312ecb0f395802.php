<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<link href="<?php echo e(asset('/css/lightbox.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('/js/lightbox.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-tagsinput-angular.js')); ?>"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
</script>
<?php echo $__env->yieldContent('code-footer'); ?>