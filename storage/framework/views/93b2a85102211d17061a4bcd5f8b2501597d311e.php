<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="<?php echo e(Auth::user()->name); ?>" src="<?php echo e(url('/')); ?>/uploads/admins/<?php echo e(Auth::user()->image); ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> <?php echo e(Auth::user()->name); ?></b></small> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo e(url('/admin')); ?>" >
                        <i class="icon-home"></i> Dashboard
	   
                       
                    </a>                   
                </li>


                <li><a href="<?php echo e(url('admin/addSlider')); ?>"><i class="icon-plus"></i>  <i class="icon-film"></i> Add Slider </a></li>
                <li><a href="<?php echo e(url('admin/addAdmin')); ?>"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Admin </a></li>
                <li><a href="<?php echo e(url('admin/addClient')); ?>"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Client </a></li>
                <li><a href="<?php echo e(url('admin/addCategory')); ?>"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Category </a></li>
                <li><a href="<?php echo e(url('admin/addPortfolio')); ?>"><i class="icon-plus"></i>  <i class="icon-user"></i> Add Portfolio </a></li>
                <li><a href="<?php echo e(url('admin/addService')); ?>"><i class="icon-plus"></i>  <i class="icon-wrench"></i> Add Services </a></li>
                <li><a href="<?php echo e(url('admin/addIndustries')); ?>"><i class="icon-plus"></i>  <i class="icon-wrench"></i> Add Industries </a></li>
                <li><a href="<?php echo e(url('admin/addBlog')); ?>"><i class="icon-plus"></i>  <i class="icon-pencil"> </i>  Add Blog </a></li>
                <li><a href="<?php echo e(url('admin/addTestimonial')); ?>"><i class="icon-plus"></i>  <i class="icon-thumbs-up-alt"></i> Add Testimonial </a></li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-folder-open"></i>  Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="<?php echo e(url('/admin/about')); ?>"><i class="icon-angle-right"></i> About  </a></li>
                        <li><a href="<?php echo e(url('/admin/values')); ?>"><i class="icon-angle-right"></i> Core Values  </a></li>
                        <li><a href="<?php echo e(url('/admin/who')); ?>"><i class="icon-angle-right"></i> Who we are  </a></li>
                        <li><a href="<?php echo e(url('/admin/privacy')); ?>"><i class="icon-angle-right"></i> Privacy  </a></li>
                        <li><a href="<?php echo e(url('/admin/terms')); ?>"><i class="icon-angle-right"></i> Terms  </a></li>
                        <li><a href="<?php echo e(url('/admin/copyright')); ?>"><i class="icon-angle-right"></i> Copyright  </a></li>
                        
                    </ul>
                </li>
                
                <li><a href="<?php echo e(url('admin/addPage')); ?>"><i class="icon-plus"></i>  <i class="icon-folder-open"></i> Create Page </a></li>
                <li><a href="<?php echo e(url('admin/sitesettings')); ?>"><i class="icon-cog"></i> Site Settings </a></li>
                <li><a href="<?php echo e(url('admin/seosettings')); ?>"><i class="icon-cog"></i> SEO Settings </a></li>
                <li><a href="<?php echo e(url('admin/logout')); ?>"><i class="icon-signin"></i> Log Out </a></li>
              

           

              

            </ul>

        </div><?php /**PATH /home/designekta/stagepassRevamps/resources/views/admin/left.blade.php ENDPATH**/ ?>