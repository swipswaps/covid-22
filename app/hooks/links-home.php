<?php
	/*
	 * You can add custom links in the home page by appending them here ...
	 * The format for each link is:
		$homeLinks[] = array(
			'url' => 'path/to/link', 
			'title' => 'Link title', 
			'description' => 'Link text',
			'groups' => array('group1', 'group2'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'grid_column_classes' => '', // optional CSS classes to apply to link block. See: http://getbootstrap.com/css/#grid
			'panel_classes' => '', // optional CSS classes to apply to panel. See: http://getbootstrap.com/components/#panels
			'link_classes' => '', // optional CSS classes to apply to link. See: http://getbootstrap.com/css/#buttons
			'icon' => 'path/to/icon', // optional icon to use with the link
			'table_group' => '' // optional name of the table group you wish to add the link to. If the table group name contains non-Latin characters, you should convert them to html entities.
		);
	 */


	/* calendar links */
		$homeLinks[] = array(
			'url' => 'hooks/calendar-all-stats-it-sp-eg.php',
			'icon' => 'resources/table_icons/calendar.png',
			'title' => 'All stats (Italy, Spain, Egypt)',
			'description' => '',
			'groups' => array('Admins'),
			'grid_column_classes' => 'col-sm-12 col-md-6 col-lg-4',
			'panel_classes' => 'panel-info',
			'link_classes' => 'btn-info',
			'table_group' => 'None',
		);

	/* end of calendar links */