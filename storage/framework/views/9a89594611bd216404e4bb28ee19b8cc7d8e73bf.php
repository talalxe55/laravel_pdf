<?php $__env->startSection('content'); ?>
<section>

<div class="container">
<div class="row">
<div class="col-md-6 mx-auto mt-4">

<div class="card">
<div class="card-header bg-dark text-white">
    
<div class="card-body">


<form>


<div class="form-group">

    <label for=fname>First name</label>
    <input type=text name="fname" id="fname" class="form-group" placeholder="Enter First Name">
</div>
<div class="form-group">

    <label for=fname>Last name</label>
    <input type=text name="lname" id="lname" class="form-group" placeholder="Enter Last Name">
</div>
<div class="form-group">

    <label for=fname>Email</label>
    <input type=text name="email" id="email" class="form-group" placeholder="Enter Email">
</div>
</form>

</div>
</div> 

</div>

</div>

</div>

</div>


</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sm.talal\pdf\resources\views//customer.blade.php ENDPATH**/ ?>