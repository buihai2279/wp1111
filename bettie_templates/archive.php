<?php get_header();?>
<!-- <div class="pseudoStickyBlock" style="position: relative; display: block; height: 0px;"></div> -->
        <div class="row">
            <div class="content-wrap col-xs-12 col-sm-12 col-lg-8">
                <div class="main">
                	<?php get_sidebar('top'); ?> 
                </div>
				<div class="clear"></div>
				<?php get_template_part('loop/loop'); ?>
        	</div>
            <!-- end content -->
            <div class="right-sidebar-wrap col-xs-12 col-sm-12 col-lg-4">
                <?php get_sidebar() ?>
            </div>
    	</div>
<?php get_footer(); ?>
