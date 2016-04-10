<?php 


class monster_posts_slider_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'monster_posts_slider_widget', // Base ID
            '* Slider Widget', // Name
            array( 'description' =>'A Foo Widget') // Args
        );
    }
    function widget( $args, $instance ) {
        extract($args);
        echo $before_widget;     
        ?>
        <?php echo $after_widget; ?>
        <?php 
    }
    function update($new_instance,$old_instance){
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
    function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title']  :'Subscribe to our channel';
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php 
    }
}
?>