<!-- Assets
================================================== -->
<link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
<script src="/assets/jquery/jquery-3.5.0.min.js"></script>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/bootstrap/bootstrap.min.js"></script>

<link rel="stylesheet" href="/assets/jquery.countdown/jquery.countdown.css">
<script src="/assets/jquery.countdown/jquery.plugin.min.js"></script>
<script src="/assets/jquery.countdown/jquery.countdown.min.js"></script>

<link rel="stylesheet" href="/assets/ekko-lightbox/ekko-lightbox.css">
<script src="/assets/ekko-lightbox/ekko-lightbox.min.js"></script>

<script src="https://kit.fontawesome.com/2ae3e6b57b.js" crossorigin="anonymous"></script>

<!-- Includes
================================================== -->
<script src="/includes/scripts.js"></script>

<?php
$path = "chapters/" . $chapter . "/script.js";

if( file_exists( $path ) ) {
	?><script src="/<?php echo $path; ?>"></script><?php
}

$path = "chapters/" . $chapter . "/style.css";

if( file_exists( $path ) ) {
	?><link rel="stylesheet" href="/<?php echo $path; ?>"><?php
}
?>
