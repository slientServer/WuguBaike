<?php
	if($hintInfo!= "NaN"){
		echo '<script type="text/javascript">
			 	$(document).ready(function(){
					$("#hintInfo")[0].innerText= "'.$hintInfo.'";
					$("#hintInfo").fadeOut(3000);
					console.log($("#hintInfo")[0].innerText);
				});
			 </script>';
		}
?>