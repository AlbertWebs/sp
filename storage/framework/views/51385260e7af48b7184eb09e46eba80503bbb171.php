<?php $__env->startSection('content'); ?>

   
    
    <main class="page-content">
    <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-100 section-sm-75 section-lg-100">

      <div class="ftco-section">
        <div class="container">
        
          <div class="row">
          <?php $__currentLoopData = $Industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($industries->video == 1): ?>
            <!-- Video Theme Here -->
            <div class="col-md-6 col-lg-6"  data-aos="fade-up">
              <div class="flip-container-three">
                <div class="flipper">
                  <div class="front">
                  <!-- Background Image Goes Here -->
                  <div class="video-container">
                    <video autoplay loop muted id="myVideo" class="video-relative" >
                      <source src="<?php echo e(url('/')); ?>/uploads/video/dance.mp4" type="video/mp4">
                    </video>
                  </div>
                   
                    <!-- </Background Image Goes Here -->
                    <div class="box">
                      <h2><?php echo e($industries->title); ?></h2>
                      
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <blockquote>
                      <p>&ldquo;
                      <?php
                                    $original_string = $industries->content;
                                    $num_words = 70;
                                    $words = array();
                                    $words = explode(" ", $original_string, $num_words);
                                    $shown_string = "";
                                    $link = url('/industry');

                                    if(count($words) == 70){
                                      $words[69] = "<a href=$link/$industries->id>...Read More</a>";
                                    }

                                    $shown_string = implode(" ", $words);

                    ?>
                    
                    <?php echo html_entity_decode($shown_string); ?>

                      
                      &rdquo;</p>
                    </blockquote>
                  
                    <div class="author d-flex">
                      <div class="image mr-3 align-self-center">
                        
                      </div>
                      <div class="name align-self-center"><?php echo e($industries->title); ?> </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .flip-container -->
            </div>
          <!-- </Video Theme Here -->

          <?php else: ?>

            <div class="col-md-6 col-lg-6"  data-aos="fade-up">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front" style="background-image: url('<?php echo e(url('/')); ?>/uploads/industries/<?php echo e($industries->image); ?>');">
                    <div class="box">
                      <h2><?php echo e($industries->title); ?></h2>
                      <p>StagePass Audio Visual</p>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <blockquote>
                      <p>&ldquo;
                      <?php
                                    $original_string = $industries->content;
                                    $num_words = 70;
                                    $words = array();
                                    $words = explode(" ", $original_string, $num_words);
                                    $shown_string = "";
                                    $link = url('/industry');

                                    if(count($words) == 70){
                                      $words[69] = "<a href=$link/$industries->id>...Read More</a>";
                                    }

                                    $shown_string = implode(" ", $words);

                    ?>
                    
                    <?php echo html_entity_decode($shown_string); ?>

                      
                      &rdquo;</p>
                    </blockquote>
                  
                    <div class="author d-flex">
                      <div class="image mr-3 align-self-center">
                        
                      </div>
                      <div class="name align-self-center"><?php echo e($industries->title); ?> </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .flip-container -->
            </div>
          <?php endif; ?>
            
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          </div>
        </div>
      </div>
    </section>
  <div class="divider-spectrum"></div>


  </main>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/industries_one.blade.php ENDPATH**/ ?>