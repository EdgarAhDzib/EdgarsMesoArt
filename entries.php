<?php
while($mesoam = $stmt->fetch(PDO::FETCH_OBJ)) {
	if ($mesoam->imageFile2 != "") {
		$image_row = '<div class="row">
			<div class="col-sm-8 col-xs-12">
				<p>' . $mesoam->description .'</p>
				<p>' . $mesoam->source . '</p>
			</div>
			<div class="col-sm-2 col-xs-6 imgTopAlign">
				<a href="mesoimages/'.$mesoam->imageFile1.'" data-lightbox="'.$mesoam->imageFile1.'" data-title="'.$mesoam->imageAlt1.'"\><img src="mesoimages/'.$mesoam->imageFile1.'" style="max-height:150px; max-width:95px;"></a>
			</div>
			<div class="col-sm-2 col-xs-6 imgTopAlign">
				<a href="mesoimages/'.$mesoam->imageFile2.'" data-lightbox="'.$mesoam->imageFile2.'" data-title="'.$mesoam->imageAlt2.'"\><img src="mesoimages/'.$mesoam->imageFile2.'" style="max-height:150px; max-width:95px;"></a>
			</div>
		</div>';
	} else {
		$image_row = '<div class="row">
			<div class="col-sm-10 col-xs-12">
				<p>' . $mesoam->description .'</p>
				<p>' . $mesoam->source . '</p>
			</div>
			<div class="col-sm-2 col-xs-12 imgTopAlign">
				<a href="mesoimages/'.$mesoam->imageFile1.'" data-lightbox="'.$mesoam->imageFile1.'" data-title="'.$mesoam->imageAlt1.'"\><img src="mesoimages/'.$mesoam->imageFile1.'" style="max-height:150px; max-width:95px;"></a>
			</div>
		</div>';
	}
	echo '<div class="row col-xs-12"><a id="' . $mesoam->id . '"></a><p><h3>' . $mesoam->title . '</h3></p></div>'
		. $image_row .
		'<div class="row"><hr></div>';

}
?>

