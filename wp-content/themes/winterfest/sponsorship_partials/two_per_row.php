<div class="col-md-12">
  <h2><?php the_sub_field('title'); ?></h2>
</div>
<?php if( have_rows('sponsor') ): while( have_rows('sponsor') ) : the_row(); ?>
  <?php $image = get_sub_field('sponsor_image'); $size = 'square_two'; ?>
  <div class="col-md-6">
    <a href="<?php the_sub_field('link'); ?>">
      <?php echo wp_get_attachment_image( $image, $size ); ?>
      <!-- <img src="<?php //bloginfo('stylesheet_directory'); ?>/static/images/benandjerrys.png" width="500px" height="500px" alt=""> -->
    </a>
  </div>
<?php endwhile; endif; ?>
