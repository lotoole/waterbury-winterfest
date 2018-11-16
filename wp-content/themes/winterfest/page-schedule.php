<?php
//Template Name: Schedule Page
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

<section class="skip-to">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Scroll To Day:</h2>
        <ul>
          <li><a href="#">Day One</a></li>
          <li><a href="#">Day Two</a></li>
          <li><a href="#">Day Three</a></li>
          <li><a href="#">Day Four</a></li>
          <li><a href="#">Day Five</a></li>
          <li><a href="#">Day One</a></li>
          <li><a href="#">Day One</a></li>
          <li><a href="#">Day One</a></li>
          <li><a href="#">Day One</a></li>
          <li><a href="#">Day One</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="day">
  <div class="container">
    <div class="row">
      <!-- day -->
      <div class="col-md-6">
        <div class="day-title">
          <h3>Day One</h3>
          <span>1/3/19</span>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Saturday, January 3rd</h3>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
      </div>
      <!-- end of day -->
    </div>
  </div>
</section>

<section class="day">
  <div class="container">
    <div class="row">
      <!-- day -->
      <div class="col-md-6">
        <h3>Saturday, January 3rd</h3>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
        <div class="event">
          <h5>Opening Ceremony Vehicle Procession</h5>
          <span>5:30pm</span>
          <span>GMCR Cafe start</span>
          <a href="#" class="btn btn-primary">More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="day-title">
          <h3>Day One</h3>
          <span>1/3/19</span>
        </div>
      </div>
      <!-- end of day -->
    </div>
  </div>
</section>


<?php get_footer(); ?>
