<?php 

// $animals = [
//     'cat',
//     'dog',
//     'bunny',
//     'turtle',
//     'koala',
//     'elefant',
//     'hipo',
//     'bird',
//     'mamal'
// ];
$post = $wpdb->get_results('select post_title from wp_posts');