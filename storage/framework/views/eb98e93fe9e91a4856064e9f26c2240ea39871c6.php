<?php $__env->startSection('content'); ?>

<main class="page-content">
<?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-60 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <h3>Copyright Statement</h3>
        <div class="range range-sm-center offset-top-40 offset-sm-top-60">
          <div class="cell-lg-10">
            <div id="accordionOne" role="tablist" aria-multiselectable="true" class="panel-group panel-group-custom panel-group-light">
                
             

                <?php $__currentLoopData = $Copyright; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p><?php echo html_entity_decode($terms->content); ?></p>
                    </div>
                    </div>
                </div>
                <div class="panel panel-custom panel-light">
                   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
        
            
          </div>
        </div>
      </div>
    </section>
  </main>
<?php $__env->stopSection(); ?>

     

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/copyright.blade.php ENDPATH**/ ?>