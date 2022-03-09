<div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    <li>Users &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                    <li>Subscribers &nbsp; : <span><?php $Subscribers = DB::table('subscribers')->get(); $Count = count($Subscribers); echo $Count ?></span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
                <button type="button" onclick="window.open('<?php echo e(url('/admin/version')); ?>','_self')" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/slider')); ?>','_self')" class="btn btn-primary btn-block"> Sliders</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/banner')); ?>','_self')" class="btn btn-primary btn-block"> Banners</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/videos')); ?>','_self')" class="btn btn-primary btn-block"> Videos </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/categories')); ?>','_self')" class="btn btn-warning btn-block"> Categories</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/services')); ?>','_self')" class="btn btn-warning btn-block"> Services</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/industries')); ?>','_self')" class="btn btn-warning btn-block"> Industries</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/portfolio')); ?>','_self')" class="btn btn-warning btn-block"> Our Work</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/stats')); ?>','_self')" class="btn btn-inverse btn-block"> Statistics </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/pages')); ?>','_self')" class="btn btn-info btn-block"> Pages</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/blog')); ?>','_self')" class="btn btn-info btn-block"> Blogs</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/comments')); ?>','_self')" class="btn btn-info btn-block"> Comments </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/testimonials')); ?>','_self')" class="btn btn-success btn-block"> Testimonials </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/notifications')); ?>','_self')" class="btn btn-danger btn-block"> Notifications </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/subscribers')); ?>','_self')" class="btn btn-danger btn-block"> subscribers </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/updates')); ?>','_self')" class="btn btn-inverse btn-block"> Updates </button>
               
            </div>
            
          
            
         

        </div><?php /**PATH /home/designekta/stagepassRevamps/resources/views/admin/right.blade.php ENDPATH**/ ?>