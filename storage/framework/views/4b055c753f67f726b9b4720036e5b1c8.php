

<?php $__env->startSection('content'); ?>

<div class="card">

    <div class="card-header">Login Form</div>
    <div class="card-body">
        <form action= "<?php echo e(route('check')); ?>" method="post">
        <?php echo csrf_field(); ?>  
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"> </br>
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"> </br>
        <input type="submit" value="Login" class="btn btn-success">

        </form>

        
    </div>

</div>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f_app\resources\views/login/index.blade.php ENDPATH**/ ?>