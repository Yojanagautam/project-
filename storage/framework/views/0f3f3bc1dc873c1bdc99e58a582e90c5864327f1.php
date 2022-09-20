<html>
   <head>
    <title>create</title>
    <body>

        <form method="post" action="<?php echo e(action([\App\Http\Controllers\pagescontoller::class,'store']  )); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
            
            <label>name:</label>
            <input type="text" name="name" required>
            <label>attandence:</label>
            <input type="text" name="attandence" required>
            <label>Age:</label>
            <input type="number" name="age" required>
            <label>image:</label>
            <input type="file" name="image" required>

            <input type="submit">
</form>
</body></head>
</html>



<?php /**PATH C:\xampp\htdocs\atm\resources\views/create.blade.php ENDPATH**/ ?>