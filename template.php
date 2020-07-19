$query = new WP_Query(array(
		'posts_per_page' => 10,
	    'post_type' 	 => 'events',
	    'post_status' 	 => 'publish',	
	    'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'event_date',
                'value' => date("Ymd"),
                'compare' => '<='
            )                   
         )	
		
	));
