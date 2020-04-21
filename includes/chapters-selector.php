<?php
$index['start'] = 'garagedoor';
$index['garagedoor'] = 'checkthelist';
$index['checkthelist'] = 'blockthedoor';
$index['blockthedoor'] = 'entertainment';
$index['entertainment'] = 'eightoclock';
$index['eightoclock'] = 'end';
$index['end'] = '';

$chnxt = $index[$chapter];

$path = "chapters/" . $chapter . "/chapter.php";

if( file_exists( $path ) ) {
	require_once( $path );
} else {
	require_once( 'includes/404.php' );
}
?>

<span id="chnxt" data-chnxt="<?php echo $chnxt; ?>"></span>
