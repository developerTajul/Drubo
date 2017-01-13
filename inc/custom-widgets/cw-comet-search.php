<?php 

Class comet_search extends WP_Widget{


	/**
	 * Sets up the widgets name etc
	 */
	public function __construct(){

		parent::__construct('comet-search', 'Comet Search', array(
			'description'	=> "Comet Search Box by Comet"
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

            <form method="GET" action="<?php echo site_url(); ?>">
                <input type="text" name="s" placeholder="Search.." class="form-control">
            </form>

			

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
	<?php }




}





add_action('widgets_init', 'comet_search_fn');

function comet_search_fn(){

	register_widget('comet_search');

}