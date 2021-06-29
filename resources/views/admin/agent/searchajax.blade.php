<?php
if(!empty($posts_data ))
{
$set_count = 1;
$output_head = '';
$output_body = '';
$output_footer ='';
 
$output_head .= '<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Title</th>
<th>Created At</th>
<th>Body</th>
<th>Options</th>
</tr>
</thead>
<tbody>
';
 
foreach ($posts_data as $post_val)
{
$set_body = substr(strip_tags($post->body),0,45)."....";
$show_title = url('blog/'.$post_val->slug);
$output_body .=  '<tr>
<td>'.$set_count++.'</td>
<td>'.$post_val->title.'</td>
<td>'.$post_val->created_at.'</td>
<td>'.$set_body.'</td>
<td><a href="'.$show_title.'" target="_blank" title="SHOW" ><span class="search glyphicon glyphicon-list"></span></a></td>
</tr>';
}
 
$output_footer .= '
</tbody>
</table>
</div>';
 
echo $output_head;
echo $output_body;
echo $output_footer;
}
 
else
{
echo 'We Not Found Any Data.';
}
?>