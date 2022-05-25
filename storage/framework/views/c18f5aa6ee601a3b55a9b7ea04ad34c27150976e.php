<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="bg-dark">
<div class="ml-10 2xl:ml-32 mr-10 pt-20">
<img src="/m1/<?php echo e($movie['image']); ?>" class="w-64 mr-10 mt-10">
<h1 class="text-3xl text-white_ pl-16 mt-4 mb-4">
    <?php echo e($movie['title']); ?>

</h1>
 <p>
    <?php echo e($movie['description']); ?>

</p>
</div>
</div>
</div>
</div>
</body>
</html><?php /**PATH /home/endeavour/project/unity/resources/views/m1.blade.php ENDPATH**/ ?>