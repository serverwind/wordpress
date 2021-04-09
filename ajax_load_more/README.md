<h1>AJAX LOAD MORE</h1>

Best method what I find to make button what will load more posts on click.

Thanks https://artisansweb.net/load-wordpress-post-ajax/ 

To make this method works in <b>archive.php</b> , I did several changes.

In <b>archive.php</b> you should get ID of current category:

<code>$category = get_queried_object();</code>

To loop posts from this category in archive.php add:

<code>'cat' => $category->term_id,</code>

Somethere below add:

<code>&lt;div style='display:none' id="cat-id"&gt;&lt;?php echo $category->term_id; ?&gt;&lt;/div&gt;</code>

Now in our AJAX <b>custom.js</b> you should get this <i>'cat-id'</i> value:

<code>var categoryId=document.getElementById('cat-id').innerHTML;</code>

and in <i>var data</i> add

<code>catid:categoryId</code>

Last one, in functions.php edit:

<code>$args = array( </code>

and add this request:

<code>'cat' => $_REQUEST['catid'],</code>

Thats all.
