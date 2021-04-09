#AJAX LOAD MORE

Best method what I find to make button what will load more posts on click.
Thanks https://artisansweb.net/load-wordpress-post-ajax/ 

To make this method works in archive.php , I did several changes.

In archive.php you should get ID of current category:

$category = get_queried_object();

To loop posts from this category in archive.php add:

'cat' => $category->term_id,

Somethere below add:

&lt;div style='display:none' id="cat-id"&gt;&lt;?php echo $category->term_id; ?&gt;&lt;/div&gt;

Now in our AJAX custom.js you should get this 'cat-id' value:

var categoryId=document.getElementById('cat-id').innerHTML;

and in var data add

catid:categoryId

Last one, in functions.php edit:

$args = array( 

and add this request:

'cat' => $_REQUEST['catid'],

Thats all.
