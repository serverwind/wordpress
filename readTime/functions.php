<?php
if ( ! function_exists( 'gp_read_time' ) ) {
function gp_read_time() {
$text = get_the_content( '' );
$words = str_word_count( strip_tags( $text ), 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ' );
if ( !empty( $words ) ) {
$time_in_minutes = ceil( $words / 200
 );
return $time_in_minutes;
}
return false;
}
}
?>
