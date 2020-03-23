<?php
	/*
	* You can add custom links to the navigation menu by appending them here ...
	* The format for each link is:
		$navLinks[] = array(
			'url' => 'path/to/link', 
			'title' => 'Link title', 
			'groups' => array('group1', 'group2'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'icon' => 'path/to/icon',
			'table_group' => 0, // optional index of table group, default is 0
		);
	*/


	/* calendar links */
		$navLinks[] = array(
			'url' => 'hooks/calendar-all-stats-it-sp-eg.php',
			'icon' => 'resources/table_icons/calendar.png',
			'title' => 'All stats (Italy, Spain, Egypt)',
			'groups' => array('Admins'),
			'table_group' => '0',
		);

	/* end of calendar links */