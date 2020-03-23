$j(function() {
	// if user is not admin, skip
	if(!$j('a[href="admin/pageHome.php"]').length) return;

	// add mobile/small screen CSV upload button
	$j('<a href="hooks/upload-csv.php" class="btn btn-default btn-lg btn-block visible-xs visible-sm vspacer-lg">' +
			'<i class="glyphicon glyphicon-upload"></i> ' +
			'Upload CSV</a>').prependTo('#top_buttons');

	// add large screen CSV upload button
	$j('<a href="hooks/upload-csv.php" class="btn btn-default btn-lg visible-md visible-lg hspacer-lg pull-left">' +
			'<i class="glyphicon glyphicon-upload"></i> ' +
			'Upload CSV</a>').prependTo('#top_buttons');
})