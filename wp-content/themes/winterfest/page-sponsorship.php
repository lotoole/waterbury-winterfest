<?php
//Template Name: Sponsorship Page
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

<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="">

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
