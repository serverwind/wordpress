//если страницы в /sitemap_index.xml не открываются, тк там много ссылок, можно добавить это в общий для шаблона functions.php чтобы решить проблему 
add_filter( 'wpseo_sitemap_content_before_parse_html_images', '__return_empty_string', 9 );
