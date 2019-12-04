<?php

/**
 *  my_acf_google_map_api Function is used to : 
 *  display ACF Google Map
**/
function my_acf_google_map_api( $api ){
	
    $api['key'] = 'AIzaSyDJZT6rmdKIiev1YgfKkEeKKJ4UJDJzwhE';
    
    return $api;
    
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
