<?php $__env->startSection('content'); ?>
<main class="page-content">
<?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-60 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <h3>Privacy Policies</h3>
        <div class="range range-sm-center offset-top-40 offset-sm-top-60">
          <div class="cell-lg-10">
            <div id="accordionOne" role="tablist" aria-multiselectable="true" class="panel-group panel-group-custom panel-group-light">
                
               <?php $__currentLoopData = $Privacy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-custom panel-light">
                    <div id="accordionOneHeading<?php echo e($terms->id); ?>" role="tab" class="panel-heading">
                    <div class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse<?php echo e($terms->id); ?>" aria-controls="accordionOneCollapse<?php echo e($terms->id); ?>" class="collapsed"><?php echo e($terms->title); ?>

                        <div class="panel-arrow"></div>
                        </a> </div>
                    </div>
                    <div id="accordionOneCollapse<?php echo e($terms->id); ?>" role="tabpanel" aria-labelledby="accordionOneHeading<?php echo e($terms->id); ?>" class="panel-collapse">
                    <div class="panel-body">
                        <p><?php echo html_entity_decode($terms->content); ?></p>
                    </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>
<?php $__env->stopSection(); ?>

     
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/privacy.blade.php ENDPATH**/ ?>