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
    
<h1 class="text-5xl bg-rose text-white  pt-20 pl-20 pb-10"><?php echo e($heading); ?></h1>
<div>
<label class="relative block">
  <span class="sr-only">Search</span>
  <span class="absolute inset-y-0 left-0 flex items-center pl-2">
    <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
  </span>
  <input class="placeholder:italic placeholder:text-slate-400 block bg-white_ w-64 ml-36 mt-10 border border-violin rounded-md py-2  pl-9 pr-3 shadow-sm focus:outline-none focus:border-rose focus:ring-l_green focus:ring-1 sm:text-sm" placeholder="Search for Movies..." type="text" name="search"/>
</label>

    
<div class="ml-10 2xl:ml-32 mr-10 pt-20">
<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class=" float-left ">
<img src="<?php echo e($movie['image']); ?>" class="w-64 mr-8 mt-10">
<h1 class="text-3xl text-white_ pl-16 mt-4 mb-4">
    <?php echo e($movie['title']); ?>

  </h1>
  <a href="/movie/<?php echo e($movie['id']); ?>" class="text-lg bg-violin hover:bg-rose text-white_ rounded-xl mb-10 px-4 py-2 ml-14 mt-4">Show more</a>
 
  <br>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

</body>
</html><?php /**PATH /home/endeavour/project/unity/resources/views/movies.blade.php ENDPATH**/ ?>