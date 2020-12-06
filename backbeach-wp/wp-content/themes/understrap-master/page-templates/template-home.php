<?php

/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


<div class="home-banner">
  <div class="container">
    <h1 class="<?php if ( is_front_page() ) {
								?> wow fadeInDown <?php
							} ?>">A Dining Experience</h1>
  </div>
</div>

<div class="home-call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="#" class="call-to-action">
          <div class="image"></div>
          <div class="title">Dining Menu</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="call-to-action second">
          <div class="image"></div>
          <div class="title">Lunch Menu</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="call-to-action third">
          <div class="image"></div>
          <div class="title">Events</div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="home-welcome">
  <div class="title-holder">
    <div class="container">
      <h2>
        <span>Welcome to</span><br>
        The Backbeach Eating House
      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-8">
        <p class="tagline">
          There is only one place like the BackBeach Cafe & Restaurant. Located right on the beach in beautiful Delray area. Offers alfresco seating and an elevated, open-air dining room highlighted by granite, authentic artwork and magnificent woodwork.
        </p>
        <p>
          Headed by a team of Italian chefs, the kitchen uses only the finest ingredients available in the preparation of dishes that are exceptionally flavorful.
          We are proud to support local business and producers by sourcing as much as possible locally, including fish from Key West, beef and chicken from Loxahatchee and vegetables from our own Bedner's Farms in the heart of Delray Beach.
        </p>
      </div>
      <div class="col-lg-3">
        <div class="button">
          About Us<i class="fa fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home-news">
  <div class="bg-image"></div>
  <div class="container">
    <div class="row aligh-items-center">
      <div class="col-xl-5 col-md-6">
        <a href="#" class="news-img">
          <div class="image"></div>
          <div class="date">Fri Feb 14th</div>
          <div class="category">What's On</div>
        </a>
      </div>
      <!-- use this one column as a space -->
      <div class="col-xl-1 d-none d-xl-block">
      </div>
      <div class="col-md-6">
        <h2>Valentine's Day</h2>
        <div class="content-holder">
          <p>Join us and Celebrate Love with a special tasting menu featuring Steak and Seafood. Lunch is pretty full but we're taking dinner bookings for our full a la carte dinner menu for two. Have a romantic dinner on the beach with your loved one. All dinner reservations receive a complimentary box of chocolates too...
          </p>
        </div>
        <div href="#" class="button">
          Read More<i class="fa fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home-about">
  <div class="bg-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vectorTop.png" alt="top cutout" width="100%">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vectorBottom.png" alt="bottom cutout">
  </div>
  <div class="title-holder">

    <div class="container">

      <h2>
        <span>Served Fresh</span><br>
        from our farm to your table
      </h2>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-8">
        <p class="tagline">
          A place to grab lunch on the go or linger over a delicious farm to table meal with family, friends and business associates.
        </p>
        <p>
          The restaurant sources exceptionally clean ingredients from the best local farms and seeks to make dishes that are nutritious and nourishing to the body, while still providing flavor satisfaction.
        </p>
      </div>
      <div class="col-lg-3">
        <div class="button">
          Dig Deeper<i class="fa fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home-about-images">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="#" class="call-to-action">
          <div class="image"></div>
          <!-- <div class="title">Dining Menu</div> -->
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="call-to-action second">
          <div class="image"></div>
          <!-- <div class="title">Lunch Menu</div> -->
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="call-to-action third">
          <div class="image"></div>
          <!-- <div class="title">Events</div> -->
        </a>
      </div>
    </div>
  </div>
</div>

<div class="home-testimonials">
  <div class="bg-overlay">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-7">
        <h2>Happy Customers</h2>
        <div class="testimonial-holder">
          <p>Ah! What a place. I could go have breakfast every day and not get tired by the view. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if you're visiting Delray Beach!</p>
          <div class="seperator"></div>
          <div class="author">John Bunce</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home-subscribe">
  <div class="title-holder">
    <div class="container">
      <h2>
        <span>Sign Up</span><br>
        Subscribe to our email newsletter
      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-11">
        <?php echo do_shortcode('[contact-form-7 id="46" title="Newsletter Subscription"]'); ?>
      </div>
    </div>
  </div>
</div>

<div class="home-social">
  <div class="title-holder">
    <div class="container">
      <h2>
        <span>Socials</span><br>
        Follow Us on facebook & instagram
      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-11">
        <div class="facebook-holder">
          <div class="title">
            <i class="fa fa-facebook-square"></i>
            What's new on facebook
          </div>
          <div class="row">
            <div class="col-lg-5 image">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>../imgages/call-to-action-2.png" alt="shrimp plate"> -->
              <!-- <div class="image"></div> -->
            </div>
            <div class="col-lg-6">
              <div class="content">
                <div class="meta-data">
                  <div class="date"><i class="fa fa-calendar"></i>Posted 31 Jan 2020</div>
                  <div class="likes"><i class="fa fa-thumbs-up"></i>24 likes</div>
                </div>
                <p>Come for the food... Leave with a sea of memories. Dive deep into the vibrant world of Backbeach. This oceanfront restaurant and cafe in Delray Beach features evocative, sensory experiences inspired by the sea, stunning ocean views and five fascinating social and dining spaces.</p>
                <a href="#" class="button">Read on facebook</a>
              </div>
            </div>
          </div>
        </div>
        <div class="instagram-holder">
          <div class="title">
            <i class="fa fa-instagram"></i>
            @backbeachcafe</div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
/* call-to-action-1 */
