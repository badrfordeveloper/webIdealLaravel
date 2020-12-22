<?php 

$linkName = '/home/websuspc/public_html/public/storage';

$target = '/home/websuspc/public_html/storage/app/public';

symlink($target, $linkName);

echo "success";

/*symlink('/public_html/ecom/storage/app/public', '/public_html/storage')
*/
 ?>