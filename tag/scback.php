<?php
/*
Plugin Name: Scroll To AnyWhere
Plugin URI: https://mufthai.com/
Description: Smooth Scroll to anywhere is created to scroll to top center and bottom of the site.Its Unique Plugin. User can go to top, center and bottom of the site using this tool easily. Now you can control the scrolling speed! and hide on pages.
Version: 1.0.4
Author: Samiullah Kaifi
Author URI: https://mufthai.com/ 
*/



	define ( 'SCTOA_Plugin_url', plugin_dir_url(__FILE__)); // with forward slash (/).
	
	function sctoa_plugin_menu()
	{
	add_menu_page('Scroll AnyWhere' , 'Scroll AnyWhere', 'manage_options', 'sctoa_plugin_page', 'sctoa_plugin_page');
	}
	add_action('admin_menu', 'sctoa_plugin_menu');
	
	
	
	function sctoa_admin_js() 
	{
	if (isset($_GET['page']) && $_GET['page'] == 'sctoa_plugin_page')
	{
		wp_enqueue_script('jquery');
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('my-upload', SCTOA_Plugin_url.'js/jscolor.js', array('jquery','media-upload','thickbox'));
		wp_enqueue_script('my-upload');
	}
	}
	
	function sctoa_admin_styles()
	{
	if (isset($_GET['page']) && $_GET['page'] == 'sctoa_plugin_page')
	{
		wp_enqueue_style('thickbox');
	}
	}
	add_action('admin_print_scripts', 'sctoa_admin_js');
	add_action('admin_print_styles', 'sctoa_admin_styles');
	
	
		
	
	function sctoa_plugin_page()
	{
	if(isset($_POST['SCTOA_UPDATE'])){
		update_option('SCTOA_scroll_speed',$_POST['SCTOA_scroll_speed']);
		update_option('sctoa_up_btn',$_POST['sctoa_up_btn']);
		update_option('sctoa_down_btn',$_POST['sctoa_down_btn']);
	
		update_option('SCTOA_pageview',$_POST['SCTOA_pageview']);
		update_option('SCTOA_postview',$_POST['SCTOA_postview']);
		update_option('SCTOA_onlyHome',$_POST['SCTOA_onlyHome']);
		update_option('SCTOA_toptext',$_POST['SCTOA_toptext']);
		update_option('SCTOA_centertext',$_POST['SCTOA_centertext']);
		update_option('SCTOA_bottomtext',$_POST['SCTOA_bottomtext']);
	
		update_option('SCTOA_bgColor',$_POST['SCTOA_bgColor']);
		update_option('SCTOA_textColor',$_POST['SCTOA_textColor']);
		update_option('SCTOA_float',$_POST['SCTOA_float']);
	
	
		echo '<h3>Plugin has been updated.</h3>';
	}
	$wp_SCTOA_scroll_speed = get_option('SCTOA_scroll_speed');
	$sctoa_up_btn = get_option('sctoa_up_btn');
	$sctoa_down_btn = get_option('sctoa_down_btn');
	$wp_SCTOA_pageview = get_option('SCTOA_pageview');
	$wp_SCTOA_postview = get_option('SCTOA_postview');
	$wp_SCTOA_onlyHome = get_option('SCTOA_onlyHome');
	$wp_SCTOA_toptext = get_option('SCTOA_toptext');
	$wp_SCTOA_centertext = get_option('SCTOA_centertext');
	$wp_SCTOA_bottomtext = get_option('SCTOA_bottomtext');
	$wp_SCTOA_bgColor = get_option('SCTOA_bgColor');
	$wp_SCTOA_textColor = get_option('SCTOA_textColor');
	$wp_SCTOA_float = get_option('SCTOA_float');
			

	echo '<div class="wrap">';
	echo '<div id="icon-options-general" class="icon32"></div>';
	?>
	<style type="text/css">
		.icon_choose input{
			margin-bottom:10px;
		}

		.welcome-panel h3{
			margin: 10px 0;
		}
	</style>  
<style type="text/css">
		#plugin-title {
			width:772px;
			height:250px;
			background-image: url(http://www.pakistansol.com/wp-content/uploads/2015/08/scroll_to_anywhere.png);
			background-size:772px 250px;
		}
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
			only screen and (-o-min-device-pixel-ratio: 15/10),
			only screen and (min-resolution: 144dpi),
			only screen and (min-resolution: 1.5dppx)
		{
			#plugin-title {
				background-image: url(http://www.pakistansol.com/wp-content/uploads/2015/08/scroll_to_anywhere.png);
			}
		}
		</style>
	<form method="post" id="SCTOA_OPTION" class="welcome-panel">
		<h2>Smooth Scroll to Top, Center Or Bottom Option Page</h2><br>
		<b>Here you can Customize Options for Scroll to AnyWhere</b>
	


		<label for="SCTOA_scroll_speed"><h4>Scroll Speed</h4></label>
		<input type="text" name="SCTOA_scroll_speed" id="SCTOA_scroll_speed" value="<?php if($wp_SCTOA_scroll_speed=="") echo "1000"; else echo "$wp_SCTOA_scroll_speed";?>" > Note: 1000=1s and this field must be a number.
		<br> 
		<label for="SCTOA_pageview"><h4>Hide On Pages</h4></label>
		<input type="checkbox" name="SCTOA_pageview" id="SCTOA_pageview" value="yes" <?php if($wp_SCTOA_pageview=="yes") echo "checked"; else echo "";?> > <label for="SCTOA_pageview">if Checked, Scroll buttons will not apper on pages.</label>
		<br> 
		<label for="SCTOA_postview"><h4>Hide On Posts</h4></label>
		<input type="checkbox" name="SCTOA_postview" id="SCTOA_postview" value="yes" <?php if($wp_SCTOA_postview=="yes") echo "checked"; else echo "";?> > <label for="SCTOA_postview">if Checked, Scroll buttons will not apper on Posts.</label>
		<br> 
		<label for="SCTOA_onlyHome"><h4>Show On Only Home Page</h4></label>
		<input type="checkbox" name="SCTOA_onlyHome" id="SCTOA_onlyHome" value="yes" <?php if($wp_SCTOA_onlyHome=="yes") echo "checked"; else echo "";?> > <label for="SCTOA_onlyHome">if Checked, Scroll buttons will apper only on Home Page.</label>
		<br> 
        <b>Here Please enter your custom name , colors or use default</b>
		<h4>Text for 'Top'</h4>
		<input type="text" name="SCTOA_toptext" id="SCTOA_toptext_1" value="<?php echo $wp_SCTOA_toptext; ?>"  placeholder="Enter Top">
		<br> 
		<h4>Text for 'Center'</h4>
		<input type="text" name="SCTOA_centertext" id="SCTOA_toptext_1" value="<?php echo $wp_SCTOA_centertext; ?>"  placeholder="Enter Center">
		<br> 
		<h4>Text for 'Bottom'</h4>
		<input type="text" name="SCTOA_bottomtext" id="SCTOA_toptext_1" value="<?php echo $wp_SCTOA_bottomtext; ?>"  placeholder="Enter Bottom">

		<h4>Background Color ,click in Input to use Color Picker</h4>
		<input type="text" name="SCTOA_bgColor" class="color" value="<?php echo $wp_SCTOA_bgColor; ?>" ><label>i.e 000000</label>
		<h4>Text Color ,click in Input to use Color Picker</h4>
		<input type="text" name="SCTOA_textColor" class="color" value="<?php echo $wp_SCTOA_textColor; ?>" ><label>i.e ffffff</label>

		<h4>Direction (horizontal)</h4>
		<select name="SCTOA_float">
        <option value="Left" <?php if($wp_SCTOA_float == "Left"){echo "selected";} ?>>Left</option>
        <option value="Center" <?php if($wp_SCTOA_float == "Center"){echo "selected";} ?>>Center</option>
        <option value="Right" <?php if($wp_SCTOA_float == "Right"){echo "selected";} ?>>Right</option>
        </select>
		
		<div style="float:right; color:#EF1C7E; text-transform: capitalize;">
<b>Thanks for using mine plugin</b><br>
<strong>If you love this plugin, Please Rate Us.Find More <a target="new" href="http://pakistansol.com">Visit Site</a></strong> <br>
			Mine Other PLugin :: <a target="new" href="https://wordpress.org/plugins/easy-web-analytics-integration/">Easy Web Analytics Integration</a>
			<br>
            <cite>Samiullah Kaifi</cite><br>
<a href="mailto:samiullahkaifi16@gmail.com">FeedBack & Contact</a>
		</div>

		<div style="overflow:hidden; margin-top:20px; margin-bottom:20px;">
			<button type="submit" name="SCTOA_UPDATE"  class="button button-primary">Update Now</button> 
		</div>
	</form><!-- /#SCTOA_OPTION -->

	<?php
	echo "</div>";
}



function sctoa_load_script() { 

	$wp_SCTOA_pageview = get_option('SCTOA_pageview');
	$wp_SCTOA_postview = get_option('SCTOA_postview');
	$wp_SCTOA_onlyHome = get_option('SCTOA_onlyHome');
	
	
	if (is_page() && $wp_SCTOA_pageview =="yes") {
	echo "<style> .scroll-btn-container { display:block!important; }  </style>  \n";
	}
	elseif (is_single() && $wp_SCTOA_postview =="yes") {
	echo "<style> .scroll-btn-container { display:none!important; }  </style>  \n";
	}
	else {
	echo "<style> .scroll-btn-container { display:block!important; }  </style>  \n";
	wp_enqueue_script('newscript', plugins_url( '/js/script.js' , __FILE__ ),array('jquery') );
	wp_enqueue_style( 'sctoa-style', plugins_url('/css/style.css', __FILE__) );
	
	}
	
	if($wp_SCTOA_onlyHome =="yes") {
	if ( is_front_page()){
	echo "<style> .scroll-btn-container { display:block!important; }  </style>  \n";
	} 
	else{
	echo "<style> .scroll-btn-container { display:none!important; }  </style>  \n";
	
	}
	}
	
	
	}
	add_action( 'wp_enqueue_scripts', 'sctoa_load_script' );
	
	
	
	function scroll_tandb(){
		include('scfront.php');
	
	}
	add_action('wp_footer', 'scroll_tandb');
	?>