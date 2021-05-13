<?php 
session_start();

if ($_SESSION["autenticado"] != true) {
	echo '<script>
		window.location.href = "index.php"
	</script>';
}

?>