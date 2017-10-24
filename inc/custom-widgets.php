<?php


function every_custom_widgets()
{
    register_sidebar(array(
        'name' => __('Footer Sidebar', 'every'),
        'id' => 'footer_sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'every'),
        'before_widget' => '<div class="col-md-3 col-sm-6 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="title">',
        'after_title' => '</h5>',
    ));
}

add_action('widgets_init', 'every_custom_widgets');


function every_blog_custom_widgets()
{
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'every'),
        'id' => 'blog_sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'every'),
        'before_widget' => '<div class="right-side blog-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="border">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'every_blog_custom_widgets');

class pu_media_upload_widget extends WP_Widget
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'pu_media_upload',
            'description' => 'Widget that uses the built in Media library.'
        );
        parent::__construct('pu_media_upload', 'Media Upload Widget', $widget_ops);
        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
    }

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', get_template_directory_uri() . '/assets/js/upload-media.js', array('jquery'));
        wp_enqueue_style('thickbox');
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if ((!empty($instance['image'])) && (!empty($instance['description']))) { ?>

                <div class="f-content">
                    <a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo apply_filters('image',$instance['image']); ?>" alt="image" /></a>
                    <p><?php echo apply_filters('description',$instance['description']); ?></p>
                </div>
           
            <?php
        }
        echo $args['after_widget'];
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    public function update($new_instance, $old_instance)
    {
        $updated_instance = $new_instance;

        $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';


        return $updated_instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void
     **/
    public function form($instance)
    {
        $image = '';
        if (isset($instance['image'])) {
            $image = $instance['image'];
        }

        $description = '';
        if (isset($instance['description'])) {
            $description = $instance['description'];
        }
        ?>

        <p>
            <label for="<?php echo $this->get_field_name('image'); ?>"><?php _e('Image:'); ?></label>
            <input name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>"
                   class="widefat" type="text" size="36" value="<?php echo esc_url($image); ?>"/>
            <input class="upload_image_button" type="button" value="Upload Image"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_name('description'); ?>"><?php echo _e('Description') ?></label>
            <textarea class="widefat" rows="10" name="<?php echo $this->get_field_name('description'); ?>"
                      id="<?php echo $this->get_field_name('description'); ?>"><?php echo esc_html($description); ?></textarea>
        </p>


        <?php
    }
}

add_action('widgets_init', create_function('', 'register_widget("pu_media_upload_widget");'));
/*
*
* Custom Recent Post
*
*/
class Foo_Recent_Widget extends WP_Widget {

function __construct() {
	parent::__construct(
	'foo_recent-widget', // Base ID
	esc_html__( 'Custom Footer Recent Post', 'every' ), // Name
	array( 'description' => esc_html__( 'A custom recent post Widget for footer', 'every' ), ) // Args
	);
}

	public function widget( $args, $instance ) {
	echo $args['before_widget'];
	
	if (! empty( $instance['title'] ) && ! empty( $instance['post_no'] ) ) { ?>
		<h5 class="title"><?php echo esc_html(apply_filters('title', $instance['title']));?></h5>
		<?php
		
			$every_blog_post = New WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => $instance['post_no'],
			));
			if($every_blog_post->have_posts()): while($every_blog_post->have_posts()): $every_blog_post->the_post();
		
		?>
		
		
		<div class="f-txt">
			<div class="f-img"><a href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){the_post_thumbnail('every-footer-thumb');} ?></a></div>
			<p><a href="<?php the_permalink();?>"><?php the_title();?></a> <br /><span><?php the_time('F d, Y');?></span></p>
		</div>	
		
		<?php endwhile;endif;?>
		
	<?php	
	}
	
	echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['post_no'] = ( ! empty( $new_instance['post_no'] ) ) ? strip_tags( $new_instance['post_no'] ) : '';

		return $instance;
	}
	public function form( $instance ) {
	$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'every' );
	$post_no = ! empty( $instance['post_no'] ) ? $instance['post_no'] : esc_html__( '', 'every' );
	?>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'every' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>"><?php esc_attr_e( 'Post No:', 'every' ); ?></label>
		<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>"  step="1" min="1" size="3" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" type="number" value="<?php echo esc_attr( $post_no ); ?>">
	</p>	
	<?php
	}

}
function every_footer_recent_post(){
	register_widget('Foo_Recent_Widget');
}
add_action('widgets_init', 'every_footer_recent_post');


