<?php $__env->startSection('content'); ?>
<div id="wrap" >


        <!-- HEADER SECTION -->
        <?php echo $__env->make('admin.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php echo $__env->make('admin.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2> Admin Dashboard </h2></center>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->

                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                 
                 <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mt-2 mb-2">Drag & Drop File Uploading</h1>

                            <form action="<?php echo e(route('dropzone.store')); ?>" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <h3>Drop Images Here</h3>
                                </div>
                                <input type="hidden" name="portfolio_id" value="<?php echo e($id); ?>">
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                        Dropzone.options.imageUpload = {
                            maxFilesize         :       1,
                            acceptedFiles: ".jpeg,.jpg,.png,.gif"
                        };
                </script>
                 





            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         <?php echo $__env->make('admin.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/stagepassRevamps/resources/views/admin/dropzone.blade.php ENDPATH**/ ?>