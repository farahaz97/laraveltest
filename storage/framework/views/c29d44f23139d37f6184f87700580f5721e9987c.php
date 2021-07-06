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
              <span class="badge"><?php echo e(Session::has ('cart') ? Session::get ('cart')->totalQty:''); ?></span>
          </a>
        </li>
    </ul>
</head>

<body>
        <?php if(Session::has('cart')): ?>
            <div class="row">
                <div>
                    <ul class="list-group">
                        <?php $__currentLoopData = (array) $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="lis-group-item">
                                <span class="badge"><?php echo e($orderItems ['qty']); ?></span>
                                <strong><?php echo e($orderItems ['items'] ['product_name']); ?></strong>
                                <span class="label label-success"><?php echo e($orderItems ['price']); ?></span> 
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Reduce by 1</a></li>
                                        <li><a href=""></a>Reduce by All</li>
                                    </ul>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total: <?php echo e($totalPrice); ?></strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <button type="button" class="btn btn-success">Checkout</button>
                </div>
            </div>
        <?php else: ?>
        <div class="row">
            <div class="col-sm-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
               <h2>No Items in Cart!</h2>
            </div>
        </div>
        <?php endif; ?>

    </body>
</html><?php /**PATH C:\laragon\www\Cashier-POS\resources\views/shopping-cart.blade.php ENDPATH**/ ?>