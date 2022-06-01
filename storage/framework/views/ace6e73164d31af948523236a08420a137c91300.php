<?php $__env->startSection('content'); ?>
<section>

<div class="container">
<div class="row">
<div class="col-md-6 mx-auto mt-4">

<div class="card">
<div class="card-header bg-dark text-white text-center"><h4>Add Customers</h4></div> 
    
<div class="card-body">


<form>

<?php echo csrf_field(); ?>
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
<button type="submit" class="btn btn-dark btn-block mt-4" id="save_form">Save Customers</button>
</form>

</div>


</div>

</div>

</div>

</div>


</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>

<script>
$(document).ready(function(){

$('#save_form').on('click',function(e){
    e.preventDefault();

const fname=$('#fname').val();
const lname=$('#lname').val();
const email=$('#email').val();

$.ajax({


type: 'POST',
url : 'save_customer',
data: {

    '_token': '<?= csrf_token() ?>',
    fname: fname,
    lname: lname,
    email: email
},
success: function(data){

if(data.success){


    $('#fname').val('');
    $('#lname').val('');
    $('#email').val('');
    $('#notifDiv').fadeIn();
    $('#notifDiv').css('background','green');
    $('#notifDiv').text('Customer Saved Successfully');
    setTimeout(() => {
       $('#notifDiv').fadeOut();
    }, 3000);

}
else{

    $('#notifDiv').fadeIn();
    $('#notifDiv').css('background','green');
    $('#notifDiv').text('An error occured. Please try later');
    setTimeout(() => {
       $('#notifDiv').fadeOut();
    }, 3000);
}
$(this).text('Saved');
$(this).addAttr('disabled'); 

}.bind($(this))

});

});

});

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sm.talal\pdf\resources\views/customer.blade.php ENDPATH**/ ?>