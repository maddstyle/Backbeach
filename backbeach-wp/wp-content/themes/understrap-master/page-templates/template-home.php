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
    <h1>A Dining Experience</h1>
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
<div class="bg-image"></div>
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

<?php
get_footer();
/* call-to-action-1 */
