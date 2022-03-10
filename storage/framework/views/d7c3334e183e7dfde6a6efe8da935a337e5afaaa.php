<?php $Portfolio = DB::table('portfolio')->orderBy('orders','ASC')->paginate('6'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('theme/css/work.css')); ?>" />
<section class="hero-section section-50 section-sm-90 section-lg-top-120">
    <h1><span>Our</span> Work</h1>
    <h4>Creative Solutions, Technical Excellence</h4>
    <div class="work-container-image">
        <?php $__currentLoopData = $Portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="image-one">
             <img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($portfolio->image_one); ?>" alt="<?php echo e($portfolio->title); ?>" />
             <div class="image-one-cover">
                 <h2><?php echo e($portfolio->title); ?></h2>
                 <div class="btn-wrap folio-btn">
                     <a href="<?php echo e(url('/')); ?>/portfolio/<?php echo e($portfolio->slung); ?>" class="btn btn-sm btn-gray-base-outline">View Gallery</a>
                 </div>
             </div>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    
    <br><br>
    <center>
        <a style="padding-bottom: 10px" target="new" href="<?php echo e(url('/')); ?>/our-work" class="btn  btn-primary">Explore More</a>
    </center>

    </div>
    <div class="divider-spectrum"></div>


    
</section>
<?php /**PATH /home/designekta/stagepassRevamps/resources/views/front/instagram.blade.php ENDPATH**/ ?>