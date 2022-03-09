<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('theme/css/work.css')); ?>" />
<main class="page-content">
    <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="hero-section">
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
        
        <style>
          .pagination {
            display: inline-block;
          }

          .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border:1px solid #F6C501;
          }

          .active{
             background-color: #F6C501;
          }
          </style>

        <div class="range text-center offset-top-40 offset-sm-top-60 offset-lg-top-100">
            <div class="cell-xs-12">
              <?php
                 echo $Portfolio;
               ?>
            </div>
        </div>

        
        <br><br>
        <center>
            <a target="new" href="http://instagram.com/stagepassav/" class="btn  btn-primary">Go to Instagram</a>
        </center>
        
    </section>


</main>

  <main class="page-content">
    <?php if($Portfolio->isEmpty()): ?>

    <?php else: ?>

    <?php endif; ?>
    <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
        <?php $File = DB::table('files')->get() ?>
        <?php $__currentLoopData = $File; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a id="click-me" class="btn btn-xl btn-white-outline"> View Our Profile</a></div>
          <div class="container-popup" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/tumblr_ms92j3l63y1s1b6gto1_1280.gif') no-repeat center;" id="show">
          <div class="x">
            <div class="one"></div>
            <div class="two"></div>
          </div>
        <div class="sign-up">
          <h1>Stagepass Audio Visual</h1>
          <p style="color:#fff">Get a copy of our <strong>Business Profile.<strong></p>
          <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="<?php echo e(url('/subscribe')); ?>" class="rd-mailform">
                <input type="text" name="email" placeholder="Enter your email address">
                <input type="submit" value="Request Profile">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              </form>


        </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
    </section>

  </main>

  <!-- Popup -->


  <!-- Popup -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/stagepassRevamps/resources/views/front/portfolio.blade.php ENDPATH**/ ?>