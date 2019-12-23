<?php
if (get_post_type() == 'banki') :     // можно использовать типы постов, категории и тд
    get_header('banki');
else :
    get_header();
	?>
