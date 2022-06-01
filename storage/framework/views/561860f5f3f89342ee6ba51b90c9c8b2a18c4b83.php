<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
#notifDiv{ 
background: green;
font-size: 10px;
font-weight: 400;
position: fixed;
color: white;
padding: 5px;
width: 100%;
display: none;

}

</style>
</head>
<body>
    <div id="notifDiv">


    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <?php echo $__env->yieldPushContent('javascript'); ?>
</body>
</html><?php /**PATH C:\Users\sm.talal\pdf\resources\views/layouts/master.blade.php ENDPATH**/ ?>