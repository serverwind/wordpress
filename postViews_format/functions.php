// 2500 to 2.5k

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    if ($count > 1000) {
        return round ( $count / 1000 ,1 ).' т.Просм.';
    } else {
        return $count.'';
    }
}
