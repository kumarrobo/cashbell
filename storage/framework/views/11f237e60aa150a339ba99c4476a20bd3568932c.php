<?php $__env->startSection('content'); ?>
<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Header end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content">
   <!-- Secondary Navigation
    ============================================= -->
   <?php echo $__env->make('category_navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Secondary Navigation end -->
    
   <?php echo $__env->make('Category.MobileRecharge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Secondary Navigation
    ============================================= -->
    
    <!-- Tabs
    ============================================= -->
    <?php echo $__env->make('aboutus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--============================================= -->
   
    
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pradeep/Projects/www/html/cashbell.in/resources/views/index.blade.php ENDPATH**/ ?>