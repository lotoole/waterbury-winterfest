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
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <div class="">
              <label for="purpose">Purpose</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Sponsorship</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Tickets/Registration</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Schedule</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Other</label>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="8"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
