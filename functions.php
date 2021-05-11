global $wpdb;
$yourPostTitle=$_GET['s'];
$query = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_title LIKE '%$yourPostTitle%' AND post_type='product' AND post_status='publish'");
foreach ($ids as $data) {
$url = wp_get_attachment_url( get_post_thumbnail_id($data->ID), 'full' ); // Post Thumbnail
?>
<a href="<?php echo get_permalink($data->ID); ?>"><img src="<?php echo $url ?>" /></a> // Post Link
<h2><a href="<?php echo get_permalink($data->ID); ?>"><?php echo $data->post_title; ?></a></h2> // Post Title
<?php }
