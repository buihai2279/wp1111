
<?php get_header();?>
<div class="row">
    <div class="content-wrap col-xs-12 col-sm-12 col-lg-8">
        <div class="single-post-content">
        	<?php require_once 'loop/loop-single.php'; ?>
        </div>
    </div>
    <div class="right-sidebar-wrap col-xs-12 col-sm-12 col-lg-4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer();?>
