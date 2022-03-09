<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>

<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="Keywords" content="Stagepass Audio Visual"/>
<!-- SEO -->
<?php echo SEOMeta::generate(); ?>

<?php echo OpenGraph::generate(); ?>

<?php echo Twitter::generate(); ?>

<!-- SEO -->
<?php echo $__env->make('front.favicon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('theme/css/css.css?family=Montserrat:400,700%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900')); ?>">
<?php if($page_name == 'Home' OR $page_name == 'Home1'): ?>
<link rel="stylesheet" href="<?php echo e(asset('theme/css/style.css')); ?>">
<?php else: ?>
<link rel="stylesheet" href="<?php echo e(asset('theme/css/style.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('theme/css/owl.carousel.css')); ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('theme/css/owl.theme.default.css')); ?>" />
<?php endif; ?>
<?php if($page_name == 'Submit RFP'): ?>
<link rel="stylesheet" href="<?php echo e(asset('admins_theme/assets/css/bootstrap-fileupload.min.css')); ?>" />
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('theme/css/infinite-slider.css')); ?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B0W0R0GY2L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B0W0R0GY2L');
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cb0efa8d6e05b735b42521b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body style="">
<div class="page">
  <header class="page-head">
    <div class="rd-navbar-wrap">
      <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-corporate-light">
        <div class="rd-navbar-inner">
          <div class="rd-navbar-aside-wrap">
            <div class="rd-navbar-aside">
              <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
              <div class="rd-navbar-aside-content">
                <ul class="rd-navbar-aside-group list-units">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                      <div class="unit-left"><span class="icon icon-xxs icon-primary material-icons-phone"></span></div>
                      <div class="unit-body"><a href="callto:#" class="link-secondary"><?php echo e($Settings->mobile); ?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                      <div class="unit-left"><span class="icon icon-xxs icon-primary fa-envelope-o"></span></div>
                      <div class="unit-body"><a href="/cdn-cgi/l/email-protection#ab88" class="link-secondary"><span class="__cf_email__" data-cfemail="81e8efe7eec1e5e4eceeede8efeaafeef3e6"><?php echo e($Settings->email); ?> </span></a></div>
                    </div>
                  </li>

                  <li>
                  <?php $File = DB::table('files')->get() ?>
                  <?php $__currentLoopData = $File; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                      <div class="unit-left"><span class="icon icon-xxs icon-primary fa-download"></span></div>
                      <div class="unit-body"><a download href="<?php echo e(url('/')); ?>/uploads/files/<?php echo e($file->file); ?>" class="link-secondary"><span class="__cf_email__" data-cfemail="81e8efe7eec1e5e4eceeede8efeaafeef3e6">Business Profile </span></a></div>
                    </div>
                  </li> -->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="rd-navbar-aside-group">
                  <ul class="list-inline list-inline-reset">
                    <li><a target="_new" href="<?php echo e($Settings->facebook); ?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-facebook facebook-icon"></a></li>
                    <li><a target="_new" href="<?php echo e($Settings->twitter); ?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-twitter  twitter-icon"></a></li>
                    <li><a target="_new" href="<?php echo e($Settings->google); ?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-google-plus google-plus-icon"></a></li>
                    <li><a target="_new" href="<?php echo e($Settings->instagram); ?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-instagram instagram-icon"></a></li>
                    <li><a target="_new" href="<?php echo e($Settings->youtube); ?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-youtube youtube-icon"></a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div class="rd-navbar-group">
            <div class="rd-navbar-panel">
              <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
              <a href="<?php echo e(url('/')); ?>" class="rd-navbar-brand brand"><img src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" width="200" height="22" alt="Stagepass Audio Visual logo"/></a> </div>
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-nav-inner">
                <ul class="rd-navbar-nav">
                  <li class="<?php if($page_name == 'Home'){echo "active"; }else{ echo "";} ?>"><a href="<?php echo e(url('/')); ?>">Home</a> </li>
                  <li class="<?php if($page_name == 'About'){echo "active"; }else{ echo "";} ?>"><a href="<?php echo e(url('/')); ?>/about-us">About Us</a></li>

                  <li class="<?php if($page_name == 'Work'){echo "active"; }else{ echo "";} ?>"><a href="<?php echo e(url('/')); ?>/our-work">Our Work</a></li>
                  <li class="<?php if($page_name == 'Services'){echo "active"; }else{ echo "";} ?>"><a href="#">AV Services</a>
                  <ul class="rd-navbar-dropdown">
                      <?php $Services = DB::table('services')->get() ?>
                      <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><a href="<?php echo e(url('/service')); ?>/<?php echo e($Service->slung); ?>"><span class="<?php echo e($Service->icon); ?>"></span><?php echo e($Service->title); ?></a> </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                  </li>


                  <?php $Blog = DB::table('blog')->get() ?>
                  <?php if($Blog->isEmpty()): ?>
                  <?php else: ?>
                  <li class="<?php if($page_name == 'Our Blog'){echo "active"; }else{ echo "";} ?>"><a href="#">Blog</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="<?php echo e(url('/blog')); ?>"><span class="fa fa-pencil"></span> Blog</a> </li>
                      <li><a href="<?php echo e(url('/blog')); ?>/videos"><span class="fa fa-film"></span> Videos</a> </li>


                    </ul>
                 </li>
                  <?php endif; ?>

                  <li class="<?php if($page_name == 'Contact'){echo "active"; }else{ echo "";} ?>"><a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a></li>
                  <li  class="pull-right"><a style="background-color:#F6C501; padding:5px 5px" class="btn btn-sm btn-primary" href="<?php echo e(url('/get-an-av-quote')); ?>">Get An AV Quote</a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- main -->
  <?php echo $__env->yieldContent('content'); ?>
  <!-- </main> -->
  <section class="section-40 section-sm-60 bg-cod-gray">
    <div class="shell">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-sm-11 cell-md-12">
          <div class="range">
            <div class="cell-sm-6 cell-md-4">
              <div class="inset-md-right-30">
                <h6 class="text-uppercase">Quick Contact</h6>
                <p style="text-align:left" class="pull-left"> <?php echo html_entity_decode($Settings->location); ?> </p>

              </div>
              <div class="offset-top-22">
                <div class="group-md group-top">
                  <div>
                    <div class="unit unit-horizontal unit-spacing-xs">
                      <div class="unit-left"><span class="icon icon-xs-smaller icon-primary fa-phone"></span></div>
                      <div class="unit-body"><a href="callto:#" class="link link-bold link-white-v2"><?php echo e($Settings->mobile); ?></a></div>
                    </div>
                    <div class="unit unit-horizontal unit-spacing-xs">
                      <div class="unit-left"><span class="icon icon-xs-smaller icon-primary fa-envelope"></span></div>
                      <div class="unit-body"><a href="callto:#" class="link link-white-v2"><?php echo e($Settings->email); ?></a></div>
                    </div>

                  </div>
                  <div>
                    <ul class="list-inline list-inline-reset">
                    <?php $SiteSettings = DB::table('sitesettings')->get(); ?>
                      <li><a target="_new" href="<?php echo e($Settings->facebook); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-facebook facebook-icon"></a></li>
                      <li><a target="_new" href="<?php echo e($Settings->twitter); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-twitter twitter-icon"></a></li>
                      <li><a target="_new" href="<?php echo e($Settings->google); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-google-plus google-plus-icon"></a></li>
                      <li><a target="_new" href="<?php echo e($Settings->instagram); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-instagram instagram-icon"></a></li>
                      <li><a target="_new" href="<?php echo e($Settings->youtube); ?>" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-youtube youtube-icon"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
              <h6 class="text-uppercase">Quick links</h6>
              <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                <div class="col-xs-6">
                  <ul class="list-marked-variant-2">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('/about-us')); ?>">About us</a></li>

                    <li><a href="<?php echo e(url('/our-portfolio')); ?>">Our Work</a></li>

                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-marked-variant-2">
                  <li><a href="<?php echo e(url('/get-an-av-quote')); ?>">Get Quote</a></li>
                  <li><a href="<?php echo e(url('/our-industries')); ?>">Industries</a></li>
                    <?php $Blog = DB::table('blog')->get() ?>
                    <?php if($Blog->isEmpty()): ?>
                    <?php else: ?>
                    <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo e(url('/contact-us')); ?>">Contacts</a></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
              <h6 class="text-uppercase">Subscribe</h6>
              <div class="offset-top-22 offset-md-top-30">
                <p>Get latest updates</p>
                <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="<?php echo e(url('/subscribe')); ?>" class="rd-mailform form-classic form-inline offset-top-15">
                  <div class="form-group">
                    <input id="contact-email" type="email" name="email" data-constraints="@Email  @Required" class="form-control">
                    <label for="contact-email" class="form-label">Enter Your E-mail</label>
                  </div>
                  <button type="submit" aria-label="Subscribe" class="btn btn-icon-only btn-primary"><span class="icon icon-xs icon-white fa-envelope-o"></span></button>
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="page-foot section-15 bg-gray-base">
    <div class="shell text-center">
      <div class="range">
        <div class="cell-sm-12">
          <!-- Powered By Designekta Studios -->
          <p class="rights text-white-03"><a href="<?php echo e(url('/copyright')); ?>" class="link-white-03">Copyrights</a> | <a href="<?php echo e(url('/privacy')); ?>" class="link-white-03">Privacy Policy</a> | <a href="<?php echo e(url('/terms')); ?>" class="link-white-03">Terms & Conditions</a> </p>
          <!-- Powered By Designekta Studios -->
        </div>
      </div>
    </div>

    <div class="shell text-center">
      <div class="range">
        <div class="cell-sm-12">
          <!-- Powered By Designekta Studios -->
          <p class="rights text-white-03"><span>&#169;&nbsp;</span><span id="copyright-year"></span><span><a href="<?php echo e(url('/copyright')); ?>" class="link-white-03">StagePass Audio Visual Limited</a></span>All Rights Reserved </p>
          <!-- Powered By Designekta Studios -->
        </div>
      </div>
    </div>
  </footer>
</div>
<div id="form-output-global" class="snackbars"></div>
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
        <button title="Share" class="pswp__button pswp__button--share"></button>
        <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
        <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
      <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
      <div class="pswp__caption">
        <div class="pswp__caption__cent"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo e(asset('theme/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/core.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/script.js')); ?>"></script>
<?php if($page_name == 'Submit RFP'): ?>

<script src="<?php echo e(asset('admins_theme/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

<!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo e(asset('admins_theme/assets/plugins/jasny/js/bootstrap-fileupload.js')); ?>"></script>
<?php endif; ?>
<script>
    // Get the video
    var video = document.getElementById("myVideos");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "<span class='fa fa-pause'></span>";
      } else {
        video.pause();
        btn.innerHTML = "<span class='fa fa-play'></span>";
      }
    }
</script>
<!-- Social Media Icons On Googele Business -->
<script type="application/ld+json">
{
  "@context": "http://www.schema.org",
  "@type": "ProfessionalService",
  "name": "StagePass Audio Visual Limited",
  "url": "http://stagepass.co.ke/",
  "logo": "https://stagepass.co.ke/uploads/logo/StagePass-LOGO-y.png",
  "sameAs": [
    "https://www.facebook.com/stagepassAv",
    "https://www.instagram.com/stagepassav",
    "https://www.linkedin.com/company/stagepass-audio-visual-limited",
    "https://twitter.com/StagepassAV",
    "https://www.youtube.com/user/deejayxplode1"
  ],
  "priceRange": "$$$$",
  "image": "https://stagepass.co.ke/uploads/logo/StagePass-LOGO-y.png",
  "description": "The Best Audio visual company in Kenya,  Events company in Kenya, Event management company, Event planner, Audio visual consultant, Event technology service, Video conferencing service",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "91 Mukima Lane, Mukima Drive, Along Garden Estate Road, Off Thika Super Highway,",
    "addressLocality": "Nairobi",
    "addressRegion": "Kenya",
    "postalCode": "00606",
    "addressCountry": "Kenya"
  },
  "openingHours": "Mo 01:00-01:00 Tu 01:00-01:00 We 01:00-01:00 Th 01:00-01:00 Fr 01:00-01:00 Sa 01:00-01:00 Su 01:00-01:00",
  "telephone": "+254729171351"
}
</script>

</body>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</html>
<?php /**PATH /home/designekta/stagepassRevamps/resources/views/front/master.blade.php ENDPATH**/ ?>