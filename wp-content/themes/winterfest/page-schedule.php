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

<section class="days">
  <div class="row">
    <!-- start of day -->
    <div class="col-md-6">
      <div class="hero">
        <h1>Day One</h1>
        <span>1/3/19</span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content-wrap">
        <h2>Saturday, January 3</h2>
        <div class="content">
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end of a day -->
  </div>
</section>

<section class="days">
  <div class="row">
    <!-- start of day -->
    <div class="col-md-6">
      <div class="hero day-two">
        <h1>Day One</h1>
        <span>1/3/19</span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content-wrap">
        <h2>Saturday, January 3</h2>
        <div class="content">
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
          <div class="event">
            <h5>Opening Ceremony blah blah</h5>
            <ul>
              <li>5:30pm</li>
              <li>GMCR Cafe Start</li>
            </ul>
            <a href="#" class="btn btn-primary">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
