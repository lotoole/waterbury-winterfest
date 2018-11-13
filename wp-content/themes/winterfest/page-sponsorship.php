<?php
//Template Name: Sponsorship Page
the_post();

get_header();
?>

<section class="sponsors">
  <div class="container">
    <div class="row">
      <?php
        if ( have_rows( 'sponsorship_content' ) ) {
            while ( have_rows( 'sponsorship_content' ) ) {
                the_row();
                get_template_part( 'sponsorship_partials/' . get_row_layout() );
            }
        }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
