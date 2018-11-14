<?php
//Template Name: Registration Page
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
<section class="registration-promo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Registration</h2>
        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h4>Broomball</h4>
          <span>$80/team</span>
          <span>Saturday</span>
          <span>Jan 27,10am</span>
          <a href="#" class="btn btn-primary">Register</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h4>Broomball</h4>
          <span>$80/team</span>
          <span>Saturday</span>
          <span>Jan 27,10am</span>
          <a href="#" class="btn btn-primary">Register</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h4>Broomball</h4>
          <span>$80/team</span>
          <span>Saturday</span>
          <span>Jan 27,10am</span>
          <a href="#" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
