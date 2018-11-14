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
    <div class="col-md-8">
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

<section>

</section>

<?php get_footer(); ?>
