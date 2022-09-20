<html>
    <head></head>
    <body>
      <a href="<?php echo e(url('/create')); ?>">  
        <button> create </button></a>
        <table>
            <tr>
                <th>name</th>
                <th>attandence</th>
           <th>age</th>
           <th>image</th>
           <th>edit</th></tr>


           <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->attandence); ?></td>
            <td><?php echo e($student->age); ?></td>
            <td><?php echo e($student->image); ?></td>
        
            <td><img src="<?php echo e(asset('storage/image/'.$student->image)); ?>"/></td>
            <th><a href="url('/edit/'.$student->)}}">edit</a></th>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
<html><?php /**PATH C:\xampp\htdocs\atm\resources\views/List.blade.php ENDPATH**/ ?>