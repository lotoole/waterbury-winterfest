<?php
//Template Name: About Page
the_post();

get_header();
?>
<?php
  if ( have_rows( 'flexible_content' ) ) {
      while ( have_rows( 'flexible_content' ) ) {
          the_row();
          get_template_part( 'partials/' . get_row_layout() );
      }
  }
?>
<section class="mission">
  <div class="container">
    <div class="col-md-6">
      <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
          <img src="https://fillmurray.com/300/300" alt="">
        </div>
        <div class="grid-item grid-item--width2">
          <img src="https://fillmurray.com/500/300" alt="">
        </div>
        <div class="grid-item">
          <img src="https://fillmurray.com/300/300" alt="">
        </div>
        <div class="grid-item grid-item--width2">
          <img src="https://fillmurray.com/500/300" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_field('title'); ?></h1>
      </div>
      <div class="col-md-6">
        <p class="intro"><?php the_field('interest_promo'); ?></p>
        <ul>
          <?php if( have_rows('list') ): $count=1; while( have_rows('list') ) : the_row(); ?>
            <li><?php the_sub_field('interest'); ?></li>
          <?php endwhile; endif; ?>
        </ul>
        <?php $image = get_field('contact_image'); $size = 'square_four'; ?>
        <?php echo wp_get_attachment_image( $image, $size ); ?>
      </div>
      <div class="col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="137" title="Main Contact Form"]'); ?>
      </div>
    </div>
  </div>
</section>

<section class="grants">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="intro-wrap">
          <h1>Grants</h1>
          <p class="intro">While Winterfest has always put its proceeds towards enhancing recreation in town, 2018 was the first year that grants were awarded for recreation-related programs and projects. Learn more about the grant criteria by checking out the applications at [link]. Keep in mind that the due date is ____ . Winterfest was thrilled to support such a wide range of recreational activity last year. Take a look at our grant recipients.</p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="https://fillmurray.com/300/100" alt="">
      </div>
      <div class="col-md-6">
        <div class="name-wrap">
          <h3>Company Name</h3>          
        </div>
      </div>
      <div class="col-md-12">
        <h3 class="award">Awarded:<span>$500</span></h3>
      </div>
      <div class="col-md-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
        <a href="#" class="btn btn-primary">More</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
