<?php
/*
Template Name: Redirect To Home
*/
if (have_posts()) {
  while (have_posts()) {
    the_post();
    wp_redirect(home_url());
  }
}
?>

