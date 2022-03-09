<section id="breadcrumb" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php $Banner = DB::table('banners')->where('name','Banner')->get() ?><?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($banner->image); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>'); background-color: rgba(0,0,0,.8);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap bg-fixed">
      <div class="shell">
        <div class="page-title">
          <h4></h4>
        </div>
      </div>
    </section><?php /**PATH /home/stagepassco/public_html/resources/views/front/breadcrumb.blade.php ENDPATH**/ ?>