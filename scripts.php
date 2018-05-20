<?php
echo '<script>
function spanId (span){
	soundId = span.id;
	var stringWavFile = String(soundId);
		var mesoName = document.getElementById(soundId);

		var mesoSound = document.createElement("audio");
		mesoSound.src = "sounds/" + stringWavFile;
		mesoSound.id = "audio" + stringWavFile;
		mesoSoundId = mesoSound.id;
		document.body.appendChild(mesoSound);
		
	function play(){
       var audio = document.getElementById(mesoSoundId);
       audio.play();
                 }
	play();
}

</script>';
?>