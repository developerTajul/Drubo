<?php 

Class comet_categories extends WP_Widget{


	/**
	 * Sets up the widgets name etc
	 */
	public function __construct(){

		parent::__construct('comet-categories', 'Comet Categories', array(
			'description'	=> "Comet Categories by Comet"
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
       						echo "Comet Categories";
       					}	 

       			?>
       		<?php echo $after_title; ?>

            <ul class="nav">
            <?php 
            $post_cats = get_terms('category');	


            foreach ($post_cats as $post_cat) { 
            	$link= get_term_link($post_cat); 

           

            ?>
            	
            	<li><a href="<?php echo $link; ?>"><?php echo $post_cat->name; ?></a></li>
            <?php }
            ?>
            	
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
	<?php }




}





add_action('widgets_init', 'comet_categories_fn');

function comet_categories_fn(){

	register_widget('comet_categories');

}