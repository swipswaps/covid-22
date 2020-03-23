<?php
	define('PREPEND_PATH', '../');
	$hooks_dir = dirname(__FILE__);
	include("{$hooks_dir}/../defaultLang.php");
	include("{$hooks_dir}/../language.php");
	include("{$hooks_dir}/../lib.php");
	
	include_once("{$hooks_dir}/../header.php");
	controller();
	include_once("{$hooks_dir}/../footer.php");

	function controller() {
		checkAccess();

		/*
		 * step 1: form for uploading CSVs
		 * step 2: get date of latest data in db
		 * step 3: clean up uploaded CSVs by removing data older than above date
		 * step 4: remove db data for latest date
		 * step 5: submit to admin/pageUploadCSV.php, with appropriate options
		 */

		/* step 1 */
		if(!isset($_REQUEST['upload-csv'])) {
			echo formUploadCSV();
			return;
		}

		/* step 2 */
		$err = '';
		if(!handleCSVUploads($err)) {
			echo formUploadCSV($err);
			return;
		}
		
		$date = getLatestDate();

		/* step 3 */
		if($date !== false) $res = cleanupCSVFiles($date, $err);
		if(!$res) {
			echo formUploadCSV($err);
			return;
		}

		/* step 4 */
		if($date !== false) removeDataFor($date);

		/* step 5 */
		echo redirectToImportPage();
	}

	function checkAccess() {
		/* check access */
		if(getLoggedAdmin() === false) {
			echo error_message("Access denied");
			include_once("{$hooks_dir}/../footer.php");
			exit;
		}
	}

	function formUploadCSV($err = '') {
		ob_start(); ?>
		formUploadCSV: not implemented yet.
		<?php return ob_get_clean();
	}

	function handleCSVUploads(&$err) {
		$err = 'handleCSVUploads: No handling yet';
		return false;
	}

	function getLatestDate() {
		return false;
	}

	function cleanupCSVFiles($date, &$err) {
		$err = 'cleanupCSVFiles: Not implemented yet';
		return false;
	}

	function removeDataFor($date) {

	}

	function redirectToImportPage() {
		ob_start(); ?>
		redirectToImportPage: Not implemented yet.
		<?php return ob_get_clean();
	}