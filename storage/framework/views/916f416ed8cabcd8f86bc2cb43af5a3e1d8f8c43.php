<?php $__env->startSection('content'); ?>
<main class="page-content">
    <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145">
      <div class="shell">
        <?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="range range-md-bottom range-sm-center">
          <div  data-wow-duration="2s" data-wow-offset="200" class=" section-title text-centercell-sm-10 cell-md-5 wow fadeInLeft">
            <h2 class="text-red-orange">About Us</h2>
            
            <p class="text-secondary"><?php echo html_entity_decode($about->content); ?></p>
          </div>
          <div class="cell-sm-11 cell-md-7 offset-top-40 offset-sm-top-60 offset-md-top-0">
            <div class="image-group">
              <figure data-wow-duration=".6s" data-wow-delay=".0s" data-wow-offset="80" class="wow fadeInRightSmall"><img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($about->image); ?>" alt="" width="243" height="199"/> </figure>
              <figure data-wow-duration=".9s" data-wow-delay=".4s" data-wow-offset="200" class="wow fadeInRightMedium"><img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($about->image_one); ?>" alt="" width="508" height="341"/> </figure>
              <figure data-wow-duration=".9s" data-wow-delay=".8s" data-wow-offset="300" class="wow fadeInRightSmall"><img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($about->image_two); ?>" alt="" width="689" height="469"/> </figure>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>
    <!-- Visiion Mision -->
 

    <section class="section-60 section-sm-90 section-lg-bottom-120 bg-gray-lighter">
     <!-- featured-area start -->
     <div class="featured-area pb-140">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
							<h2>Core Values</h2>
							<p>Stagepass Audio Visual serves clients with deep experience, professionalism and passion. Our creative muscle brings life to powerful ideas anchored in solid strategic thinking with laser-sharp execution that turns heads.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="featured-wrap">
							<ul>
              <?php $CoreValues = DB::table('values')->get() ?>
              <?php $__currentLoopData = $CoreValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="wow <?php echo e($values->style); ?>" data-wow-delay=".1s">
									<h3><?php echo e($values->title); ?></h3>
									<div class="featured-content">
										<!-- <div class="featured-img">
											<img src="assets/images/featured/1.jpg" alt="" />
										</div> -->
										<div class="featured-info">
											<h4><?php echo e($values->title); ?></h4>
											<p><?php echo html_entity_decode($values->content); ?></p>
										</div>
									</div>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
								<li>
									<h3>Stagepass Audio Visual Limited</h3>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		 </div>
		 <!-- featured-area end -->
    </section>

    <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145">
      <div class="shell">
        <center>
        
        <div class="range range-md-bottom range-sm-center">
          <div class="cell-sm-10 cell-md-10 ">
            
            <?php $SiteSettings = DB::table('sitesettings')->get() ?>
            <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
            <div class="offset-top-30">
              <blockquote class="quote-default">
                
                <div data-wow-duration="3s" data-wow-offset="200" class="quote-body wow fadeInUp">
                  <p class="big-font"> Our common mission is to go Beyond Technology by providing innovative solutions you can trust, through an unparalleled approach to quality, service, and support. We take pride in our work, values, and most importantly, our people. </p>
                </div>
              
              </blockquote>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
             </div>
         
        </div>
        
        </center>
      </div>
    </section>
   

    <!-- Core Values -->
    <div class="divider-spectrum"></div>
    <section class="section-60 section-sm-100 bg-gray-base">
      <div class="shell">
        <div class="range">
          <div class="cell-xs-6 cell-sm-4">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-content_copy"></span>
            <?php 
                   use App\Stat;
                   $Stats = Stat::find(1);
             ?>
              <div class="text-large counter"><?php echo e($Stats->value); ?></div>
              <h5 class="box-header"><?php echo e($Stats->title); ?></h5>
            </div>
          </div>
          <div class="cell-xs-6 cell-sm-4 offset-top-40 offset-xs-top-0">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-mood"></span>
            <?php 
                   
                   $Stats = Stat::find(2);
             ?>
              <div class="text-large counter counter"><?php echo e($Stats->value); ?></div>
              <h5 class="box-header"><?php echo e($Stats->title); ?></h5>
            </div>
          </div>
          <div class="cell-xs-6 cell-sm-4 offset-top-40 offset-sm-top-0">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-access_time"></span>
            <?php 
                   
                   $Stats = Stat::find(3);
             ?>
              <div class="text-large counter"><?php echo e($Stats->value); ?></div>
              <h5 class="box-header"><?php echo e($Stats->title); ?></h5>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <?php if($Testimonial->isEmpty()): ?>

    <?php else: ?>
    <section class="section-60 section-sm-90 section-md-bottom-120 bg-gray-dark">
      <div class="shell text-center">
        <h3>What Clients Say?</h3>
        <div class="range range-xs-center range-sm-left offset-top-40">
        <?php $__currentLoopData = $Testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="cell-sm-4">
            <blockquote class="quote-vertical quote-vertical-inverse">
              <div class="quote-body">
                <div class="quote-open">
                  <svg version="1.1" baseprofile="tiny" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="12px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve" preserveAspectRatio="none">
                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                  c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                  C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                  c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                  C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                  </svg>
                </div>
                <p class="quote-text"> <q><?php echo html_entity_decode($testimonial->content); ?></q> </p>
              </div>
              <div class="quote-meta">
                <figure class="quote-image"><img src="images/113x113.png" alt="" width="113" height="113"/> </figure>
                <cite><?php echo e($testimonial->name); ?></cite>
                <p class="caption"><?php echo e($testimonial->company); ?></p>
              </div>
            </blockquote>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </div>
      </div>
    </section>
    <?php endif; ?>
  </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/about.blade.php ENDPATH**/ ?>