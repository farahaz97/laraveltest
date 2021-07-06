<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="store.js"></script>
    <ul class="nav nav-pills">
        <li >
            <a class="nav-link" href="<?php echo e(route ('shop')); ?>">HOME</a>
          </li>
        <li>

            <a class="nav-link active" aria-current="page" href="<?php echo e(route ('shoppingCart')); ?>"> Shopping Cart
              <span><?php echo e(Session::has ('cart') ? Session::get ('cart')->totalQty:''); ?></span>
          </a>
        </li>
      </ul>

    </head>
<body>
 
<?php $__currentLoopData = $orderItems ->chunk(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItemsChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="container">
    <?php $__currentLoopData = $orderItemsChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItems): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div>
        <div class ="thumbnail">
            <img src="<?php echo e($orderItems->imagePath); ?>" alt="..." class ="img-responsive">
            <div class="caption">
                <h3><?php echo e($orderItems->product_name); ?></h3>
                <p class ="description">Quantity: <?php echo e($orderItems->quantity); ?></p>
                    <div >RM<?php echo e($orderItems->price); ?></div>
                    <button><a href="<?php echo e(route ('addToCart', ['id'=>$orderItems->id])); ?>"  class="btn btn-success"> Add to Cart</a></button>
            </div>
        </div>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </body>
</html><?php /**PATH C:\laragon\www\Cashier-POS\resources\views/shop.blade.php ENDPATH**/ ?>