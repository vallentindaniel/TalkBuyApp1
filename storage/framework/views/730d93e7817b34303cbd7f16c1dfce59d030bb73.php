<div class="container hero">
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center" style="margin-bottom: 20px;">Produse recomandate</h1>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">


                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($loop->index==0): ?>
                     <div class="carousel-item active">
                    <?php else: ?>
                     <div class="carousel-item">
                    <?php endif; ?>

                        <img class="w-100 d-block" src=<?php echo e(url('/images/1.jpg')); ?> alt="Slide Image">
                        <div class="carousel-caption" style="background-color: #000000;opacity: 0.80;height: 120px;padding-bottom: 20px;padding-top: 0px;margin-top: 0px;margin-bottom: -20px;">
                            <h3 class="text-center" style="font-size: 16px;margin-bottom: -25px;"><br></h3>
                            <p style="margin-bottom: -6px;color: rgb(255,255,255);font-style: italic;letter-spacing: 1px;font-size: 18px;opacity: 1;margin-top: 2px;"><?php echo e($product->title); ?></p>
                            <p style="margin-bottom: 5px;color: rgb(255,0,0);font-style: italic;letter-spacing: 1px;font-size: 18px;opacity: 1;"><?php echo e($product->price); ?> Lei</p>

                            <a class="btn btn-primary pulse animated infinite" href=<?php echo e('/produs/'.$product->path); ?> >Vezi Produsul</a>
                            </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon bg-primary border-primary shadow-sm"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next"
                        href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon bg-primary border-primary shadow-sm"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators invisible" style="padding-top: 0px;margin-bottom: -17px;">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="container hero">
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center" style="margin-bottom: 20px;">Cele mai cautate</h1>
            <div class="card-group" style="margin-top: 5px;">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card" style="margin-right: 5px;">
                    <img class="card-img-top w-100 d-block" src=<?php echo e(url('/images/'.$product->img[0])); ?>>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e($product->title); ?></h4>
                        <p class="shadow-sm card-text" style="font-style: italic;font-family: Bitter, serif;"><?php echo e($product->price); ?> Lei</p>
                        <a class="btn btn-primary" data-bs-hover-animate="pulse" href=<?php echo e('/'.($product->path).'/prd/'); ?> >Vezi Produsul</a>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\2021\TalkBuyV2 corect\Client\TalkBuyApp1\resources\views/product/index.blade.php ENDPATH**/ ?>