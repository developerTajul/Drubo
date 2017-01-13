<?php 


Class comet_latest_post extends WP_Widget{


	/**
	 * Sets up the widgets name etc
	 */
	public function __construct(){

		parent::__construct('comet-latest-post', 'Comet Latest Post', array(
			'description'	=> "Comet Latest Post by Comet"
		));
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) { ?>
		<?php extract($args); ?>
		<?php echo $before_widget; ?>
       		<?php echo $before_title; ?>
       			
       			<?php  if($instance['title']){
       					echo apply_filters( 'widget_title', $instance['title'] );
       					}else{
       						echo "Latest Post Tajul";
       					}	 

       			?>
       		<?php echo $after_title; ?>
       		<?php 
       		$posts = new WP_Query(array(
       			'post_type'	=> 'post',
       			'posts_per_page'	=> $instance['post_number']
       			
       		));

       		?>
           <ul class="nav">
           <?php while( $posts->have_posts() ):$posts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="ti-arrow-right"></i>
                <?php if( $instance['show'] ): ?>
               	 <span><?php the_time('d M, Y'); ?></span>
            	<?php endif; ?>
                </a></li>
            <?php endwhile; ?>    
				
            </ul>

			

        <?php echo $after_widget; ?>

	<?php }





	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) { ?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
		<input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?> ">
	</p>



	<p>
	<label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts to show:</label>
	<input type="number" size="3" value="<?php echo $instance['post_number']; ?>" min="1" step="1" name="<?php echo $this->get_field_name('post_number'); ?>" id="<?php echo $this->get_field_id('post_number'); ?>" class="tiny-text">
	</p>


	<p>
	<input type="checkbox" name="<?php echo $this->get_field_name('show'); ?>" id="<?php echo $this->get_field_id('show'); ?>" class="checkbox" 
	<?php 
	if( $instance['show'] ){
		echo "checked";
		} ?>
	>
<label for="<?php echo $this->get_field_id('show'); ?>">Display post date?</label>
	</p>

	<?php }




}





add_action('widgets_init', 'latest_post');

function latest_post(){

	register_widget('comet_latest_post');

}