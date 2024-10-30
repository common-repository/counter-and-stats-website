<?php
/*
Plugin Name: Counter and Stats 
Plugin URI: http://logonike.com
Description: This plugin tells you how many people are online in real time. It also shows visitors of the last 24 hours. Which pages are visited more. Click the button.
Version: 1.1
Author: LogoNike.Com
Author URI: http://logonike.com
License: GPL2
*/
function counter_stats_enqueue() {
	
}
add_action('wp_enqueue_scripts', 'bottom_bar_enqueue');

function counterstats(){
?>
<div style="position:fixed; bottom:-6px; left:0px; z-index:100000">
<!– count.logonike.com –>
<script src="//count.logonike.com/bd/count.js"></script>
<noscript><a href="http://logonike.com">logonike requires javascript enabled</a></noscript>
<!– END count.logonike.com –>
</div>
<?php
}
add_filter('wp_footer', 'counterstats');
?>