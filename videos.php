<?php
while ($youtube = $videos->fetch(PDO::FETCH_OBJ)) {
	echo '<div class="row"><a id="' . $youtube->anchor . '"></a><p><h3>' . $youtube->title . '</h3></p></div>
		<div class="row">
			<div class="col-md-7 col-sm-12" style="vertical-align:text-top">
				<p>' . $youtube->vid_desc .'</p>
				<p>' . $youtube->source . '</p>
			</div>
			<div class="col-md-5 col-sm-12 imgTopAlign">
				<object width="420" height="315"><param name="movie" value="http://www.youtube.com/v/' . $youtube->youtube . '?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $youtube->youtube . '?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
			</div>
		</div>
		<div class="row"><hr></div>';
}
?>