<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $Extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 

  <main class="page-content">
  

  <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- top -->
 

  
      
  <section data-on="false" data-md-on="true" style="background-image: url('<?php echo e(url('/')); ?>/uploads/backgrounds/bg.jpeg')" class="rd-parallax bg-gray-base bg-fixed">
     <div class="layer">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
        
          <div class="cell-sm-9 cell-md-12 height-fill offset-top-30">
            
              
                <div class="offset-top-15 offset-md-top-0">
                  
                    <blockquote class="quote-default">
                      <!-- Heading -->
                      <div class="section-heading">
                          <h4 class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80"><?php echo e($Service->title); ?></h4>
                      </div>
                      <!-- <heading -->
                      <div class="quote-body text-center">
                        <p> <q style="color:#ffffff;">
                      
                
                            <?php echo html_entity_decode($Service->content); ?>

                        
                        </q> </p>
                      </div>
                      
                    </blockquote>
                </div>
            
          </div>
     
        </div>
      </div>
     </div>
    </section>
  
   
   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
         
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="<?php echo e(url('/quote')); ?>" class="btn btn-xl btn-white-outline">Request Quote</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="<?php echo e(url('/contact')); ?>" class="btn btn-xl btn-white-outline">Contact Us</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="<?php echo e(url('/rfp')); ?>" class="btn btn-xl btn-white-outline">Submit an RFP</a></div>
          
        </div>
      </div>
    </section>
  </main>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/extra.blade.php ENDPATH**/ ?>