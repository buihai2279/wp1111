<?php 

class monster_about_author_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'monster_about_author_widget', // Base ID
            '* Author', // Name
            array( 'description' =>'A Foo Widget') // Args
        );
    }
    function widget( $args, $instance ) {
        extract($args);
        echo $before_widget;
        ?>
        <div class="text-center inset-3">
            <?php $user_info = get_userdata(1);?>
            <?php $id= $user_info->id; ?>
            <?php $name= $user_info->user_login; ?>
            <img src="<?php echo get_avatar_url('buihai2603@gmail.com'); ?>" alt="<?php echo $name ?>" class='round' height='320' width='320'>
            <h4><?php echo $user_info->user_login; ?></h4>
            <p><?php  echo $user_info->description; ?></p>
            <a href="<?php  echo $user_info->user_url; ?>" class="btn btn-primary h5-style">
                <em>Read more</em> 
                <i class="material-icons">arrow_forward</i>
            </a>
        </div>
        <?php echo $after_widget;
    }
    function update( $new_instance, $old_instance ) {
    }
    function form( $instance ) {
    }
}?>