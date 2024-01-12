<?php 
if(isset($sucess_msg)){
	foreach ($sucess_msg as $key => $sucess_msg){
		echo '<script>swal("'.$sucess_msg.'", "success")</script>';
	}
}

if(isset($warning_msg)){
	foreach ($warning_msg as $key => $warning_msg){
		echo '<script>swal("'.$warning_msg.'", "success")</script>';
	}
}

if(isset($warning_msg)){
	foreach ($warning_msg as $key => $warning_msg){
		echo '<script>swal("'.$warning_msg.'", "success")</script>';
	}
}

if(isset($info_msg)){
	foreach ($info_msg as $key => $info_msg){
		echo '<script>swal("'.$info_msg.'", "success")</script>';
	}
}

if(isset($error_msg)){
	foreach ($error_msg as $key => $error_msg){
		echo '<script>swal("'.$error_msg.'", "success")</script>';
	}
}

?>