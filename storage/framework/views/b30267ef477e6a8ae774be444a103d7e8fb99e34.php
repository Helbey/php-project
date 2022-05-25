<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="w-2/3 mx-auto bg-dark">
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
   
   
         <?php $__env->endSlot(); ?>    


        <div class="mb-10">
    
            <h1 class="mt-20 ml-10  text-3xl font-bold text-d_green lg:text-6xl lg:ml-64">Rapidly build modern websites without ever leaving your HTML.</h1>
            <p class="text-sm ml-8 text-l_green  mt-10 lg:ml-64 lg:text-lg">
            A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.
            </p>
            <div class="mt-20  flex-rowe mb-10 ">
                <a href="<?php echo e(url('/movies')); ?>" class="bg-l_green  rounded-xl ml-20  py-4 px-6 text-dark font-bold lg:ml-96 hover:bg-d_green">Get stared</a>
            </div>
            <section class=" w-1/12 mt-10 pt-28 lg:w-10/12 pl-8 lg:pl-80">
      <div class="flex flex-row">
        <div class="mt-24">
          <h1 class="text-rose font-bold text-7xl">01</h1>
          <h1 class="text-4xl text-rose pt-5">Tell us what you like (and what not)</h1>
          <p class="text-violin max-w-xl text-xl pt-10">
            Never again waste time thinking about what to eat! Omnifood AI will
            create a 100% personalized weekly meal plan just for you. It makes
            sure you get all the nutrients and vitamins you need, no matter what
            diet you follow!
          </p>
        </div>
        <div>
          <img src="./pic/app/app-screen-1.png" class="w-56 ml-28 lg:ml-56" />
        </div>
      </div>
    </section>
    <section class=" w-1/12 pt-28 lg:w-10/12 pl-8 lg:pl-40">
      <div class="flex flex-row lg:flex-none">
        <div class="-ml-10 lg:-ml-0">
          <img src="./pic/app/app-screen-2.png" class="ml-24   w-56 lg:ml-56 " />
        </div>
        <div class="mt-24 ml-64">
          <h1 class="text-rose font-bold text-7xl">02</h1>
          <h1 class="text-4xl text-rose pt-5">Approve your weekly meal plan</h1>
          <p class="text-violin max-w-xl  text-lg pt-10">
            Once per week, approve the meal plan generated for you by Omnifood
            AI. You can change ingredients, swap entire meals, or even add your
            own recipes.
          </p>
        </div>
      </div>
    </section>
    <section class="w-1/12 pt-28 lg:w-10/12 pl-4 lg:pl-80">
      <div class="flex flex-row">
        <div class="mt-24">
          <h1 class="text-rose font-bold text-7xl">03</h1>
          <h1 class="text-4xl text-rose pt-5">Receive meals at convenient time</h1>
          <p class="text-violin max-w-xl -ml-12 lg:-ml-0 text-xl pt-10">
            Best chefs in town will cook your selected meal every day, and we will deliver it to your door whenever works best for you. You can change delivery schedule and address daily!
          </p>
        </div>
        <div>
          <img src="./pic/app/app-screen-3.png" class="w-56 ml-24 lg:ml-56" />
        </div>
      </div>
    </section>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
    </body>
</html><?php /**PATH /home/endeavour/project/unity/resources/views/dashboard.blade.php ENDPATH**/ ?>