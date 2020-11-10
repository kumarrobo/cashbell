<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(config('global.THEME_PATH')); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo e(config('global.THEME_PATH')); ?>/favicon//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<title><?php echo e(env('APP_NAME')); ?> - Recharge & Bill Payment</title>
<meta name="description" content="<?php echo e(env('APP_NAME')); ?> - Recharge & Bill Payment">
<meta name="author" content="Pradeep Kumar|go4shoponline@gmail.com|www.go4shop.online">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="<?php echo e(config('global.THEME_PATH')); ?>/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(config('global.THEME_PATH')); ?>/vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(config('global.THEME_PATH')); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(config('global.THEME_PATH')); ?>/vendor/owl.carousel/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(config('global.THEME_PATH')); ?>/css/stylesheet.css" />
</head>
<body>
<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>

<!-- Preloader End --> 
    <?php echo $__env->yieldContent('content'); ?>
<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)">
    <i class="fa fa-chevron-up"></i>
</a> 

<!-- Modal Dialog - View Plans
============================================= -->
<?php echo $__env->make('dialog_plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Modal Dialog - View Plans end --> 

<!-- Modal Dialog - Login/Signup
============================================= -->
<?php echo $__env->make('dialog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Modal Dialog - Login/Signup end --> 

<!-- Script --> 
<script src="<?php echo e(config('global.THEME_PATH')); ?>/vendor/jquery/jquery.min.js"></script> 
<script src="<?php echo e(config('global.THEME_PATH')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo e(config('global.THEME_PATH')); ?>/vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="<?php echo e(config('global.THEME_PATH')); ?>/js/theme.js"></script>

<script type="text/javascript">


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $("#verifyOTP").click(function(e){
        $("#verifyOTP").html("Please wait...");
        $("#verifyOTP").attr("disabled","disabled");
        e.preventDefault();
        var OTP       = $("input[name=OTP]").val();
        $.ajax({
           type:'POST',
           url:"<?php echo e(route('verifyotp')); ?>",
           data:{otp:OTP},
           success:function(data){
              if(data.status === true){
                $("#oldSuccessDiv").hide();
                $("#errorDiv").hide();
                $("#successDiv").show();
                $("#successDiv").html(data.message);
                $("#otp").val('');
                $("#personalInformation").submit();
              }else{
                $("#oldSuccessDiv").hide();
                $("#errorDiv").show();
                $("#errorDiv").html(data.message);
                $("#verifyOTP").html("Verify & Submit");
                $("#verifyOTP").removeAttr("disabled");
              }
           }
        });
  });
</script>
</body>
</html><?php /**PATH /home/pradeep/Projects/www/html/cashbell.in/resources/views/layouts/default.blade.php ENDPATH**/ ?>