<?php $__env->startSection('content'); ?>
<style>
  .get-in{
    padding-bottom:10px;
    padding-top:10px;
     background-color:#ffffff;
     color:#000000;
     width:20% !important;
     float:left !important;
  }
  .get-contact{
    /* padding:20px; */
    font-weight: 300;
    
  }
  .contact-team{
    color:#ffffff;
    text-transform: uppercase;
    font-weight:800;

  }
  .lefty {
    float:left;
    font-size:15px;
    color:#ffffff !important;
  }
  .righty{
    /* float:right; */
    margin-left:150px;
    color:#ffffff;
    max-width:250px;
    font-size:15px;
    overflow-wrap: anywhere;
   
  }
  .list-terms-inline{
    margin-bottom: 50px;
  }
  .link-secondary{
    color:#ffffff !important;
  }
  .page [class*='icon-round'].icon-xxs-smallest, .page [class*='icon-circle'].icon-xxs-smallest {
    width: 46px;
    height: 46px;
    line-height: 46px;
    font-size:20px;
}
</style>
 

  <main class="page-content">
  <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="divider-spectrum"></div>
    <section data-on="false" data-md-on="true" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/image.webp'); background-position: center center;" class="rd-parallax bg-gray-base bg-image overlay-tint">
      <div data-speed="0.33" data-type="media" data-url="images/StagepassBanner.jpeg" class="rd-parallax-layer"></div>
      <div data-speed="0" data-type="html" class="rd-parallax-layer">
        <div class="section-50 section-sm-75 section-lg-top-100 section-lg-bottom-120">
          <div class="shell">
            <div class="range">
            
            
              <div class="cell-sm-6 cell-md-6 offset-top-50 offset-sm-top-0">
                <article class="icon-box-vertical">
                  <h3 class="icon-box-header"><span class="get-in">GET IN</span><br><br><span class="get-contact">CONTACT</span></a></h3>
                  
                  
                </article>
              </div>

              <div class="cell-sm-6 cell-md-6 offset-top-50 offset-sm-top-0">
                <article class="icon-box-vertical">
                  <h4 class="icon-box-header contact-team">With The Right People In Your Corner, Anything Is Achievable.</h4>
                  <address class="contact-info">
                
                    <dl class="list-terms-inline">
                      <dt class="lefty">Give us a Call On</dt>
                      <dd class="righty"><a href="callto:#+254799029971" class="link-secondary">Phone: &nbsp; 0799029971</a></dd>
                    </dl>
                 
                    <dl class="list-terms-inline">
                      <dt class="lefty">Come Say hello at</dt>
                      <dd class="righty"><a href="https://www.stagepass.co.ke" class="link-secondary"> 91 Mukima Lane,Mukima Drive Along Garden Estate Rd off Thika Super Highway</a></dd>

                        
                    </dl>
                   
                    <dl class="list-terms-inline">
                      <dt class="lefty" style="visibility: hidden"> Come Say hello at</dt>
                      <dd class="righty">
                        <ul class="list-inline list-inline-reset">
                          <?php $SiteSettings = DB::table('sitesettings')->get(); ?>
                          <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a target="_new" href="<?php echo e($Settings->facebook); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-facebook fa-2x facebook-icon"></a></li>
                            <li><a target="_new" href="<?php echo e($Settings->twitter); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-twitter twitter-icon"></a></li>
                            
                            <li><a target="_new" href="<?php echo e($Settings->instagram); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-instagram instagram-icon"></a></li>
                            <li><a target="_new" href="<?php echo e($Settings->youtube); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-youtube youtube-icon"></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>

                      </dd>
                     
                    </dl>

                  </address>
                  
                </article>
              </div>
            
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>
    
    <section class="section-60 section-sm-top-90 section-sm-bottom-100">
      <div class="shell">
        <div class="range range-md-justify">
      
          <div class="cell-md-12 cell-lg-12 offset-top-50 offset-md-top-0"> 
            <h3>Get in Touch</h3>
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo e(url('/submitMessage')); ?>" class="rd-mailform-msg form-modern offset-top-30">
              <div class="range">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                    <label for="contact-name" class="form-label">Name</label>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                  <div class="form-group">
                    <input id="contact-email" type="email" name="email" data-constraints="@Email  @Required" class="form-control">
                    <label for="contact-email" class="form-label">Email</label>
                  </div>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="cell-xs-12 offset-top-30">
                  <div class="form-group">
                    <div class="textarea-lined-wrap">
                      <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                      <label for="contact-message" class="form-label">Message</label>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-8 offset-top-30 offset-xs-top-30 offset-sm-top-50">
                  <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
                <div class="cell-xs-4 offset-top-22 offset-xs-top-30 offset-sm-top-50">
                  <button type="reset" class="btn btn-silver-outline btn-block">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="map">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.896175007544!2d36.86521394973706!3d-1.2318820359108427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1607cace031f%3A0xf92242b77a4956a5!2sStagePass+Audio+Visual+Limited!5e0!3m2!1sen!2ske!4v1557500401375!5m2!1sen!2ske"  height="950" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </main>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/stagepassRevamps/resources/views/front/contact.blade.php ENDPATH**/ ?>