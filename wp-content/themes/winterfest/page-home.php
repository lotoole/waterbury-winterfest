<?php
//Template Name: Home Page
the_post();

get_header();

$hero_image = get_field('hero_image');
$hero_src = wp_get_attachment_image_src($hero_image, 'hero');
?>
<?php
  if ( have_rows( 'flexible_content' ) ) {
      while ( have_rows( 'flexible_content' ) ) {
          the_row();
          get_template_part( 'partials/' . get_row_layout() );
      }
  }
?>

<!-- <section class="hero-v1" style="background-image: url(<?php //echo $hero_src[0]; ?>)">
  <div class="hero-background"></div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Waterbury Winterfest</h1>
          <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-6">
          <div class="button-wrap">
            <a href="#" class="btn btn-primary">Tickets</a>
          </div>
        </div>
        <div class="col-6">
          <div class="button-wrap">
            <a href="#" class="btn btn-primary">Schedule</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<?php get_footer(); ?>
