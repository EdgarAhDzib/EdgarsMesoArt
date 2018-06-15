<?php
require_once '../above/config_meso.php';
$title_html = "Edgar's Mesoamerican Art Page";
$head_title = "Edgar's Mesoamerican Art Page";
$meta_desc = "";
$front_page = false;
$page = false;
$page_array = array('index','bib','faq','news','cultures','deity','special');

if (isset($_GET['p'])) {
	$page = $_GET['p'];
	$stmt->execute(array($page));
	$header->execute(array($page));
	$videos->execute(array($page));
} else {
	$front_page = true;
	$page = false;
}
$results = $stmt->fetch(PDO::FETCH_OBJ);
if (!$results && !in_array($page,$page_array)) {
	$front_page = true;
	$page = false;
} else {
	while ($title_name = $header->fetch(PDO::FETCH_OBJ)) {
		if ($title_name->has_sound != null) {
			$title_html = $title_name->has_sound;
		} else {
			$title_html = $title_name->header;
		}
		$head_title = $title_name->header;
		$meta_desc = $title_name->meta_desc;
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="favicon.ico">
<title><?php if ($head_title) { echo $head_title; } ?></title>
<meta name="Description" content="<?php echo $meta_desc; ?>">
<script src="jquery-1.11.0.min.js"></script>
<script src="lightbox.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="lightbox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="mesoamerica.css">
</head>
<?php require_once 'statcounter.html'; ?>
<body>
<div class="col-sm-1"></div>
<div class="col-sm-10">
<?php
	require_once 'header.html';
	if ($front_page) {
		require_once '../above/front.html';
	} else if ($page) {

		switch ($page) {
			case 'index':
				require_once '../above/front.html';
				break;
			case 'bib':
				require_once '../above/biblio.html';
				break;
			case 'faq':
				require_once '../above/questions.html';
				break;
			case 'news':
				include '../above/notes.html';
				break;
			case 'cultures':
				include '../above/civs.html';
				break;
			case 'deity':
				require_once '../above/teteoh.html';
				break;
			case 'special':
				require_once '../above/topics.html';
				break;
			default:
				echo '<h1>' . $title_html . '</h1>
					<h3>Please click on any thumbnail at right for a larger image!</h3>
					<h3>Click on any <span class="pronounce">highlighted name</span> to hear its pronunciation!</h3>';
				require_once 'entries.php';
				if ($videos) {
					require_once 'videos.php';
				}
				break;
		}

	} else {
		require_once '../above/front.html';
	}
	require_once 'footer.php';
?>
</div>
<div class="col-sm-1"></div>
<p>&nbsp;</p>
<?php require_once 'scripts.php'; ?>
</body>
</html>
