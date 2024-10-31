<?php 
  
    $wp_SCTOA_icon_Select = get_option('SCTOA_icon_Select');
    $wp_SCTOA_scroll_speed = get_option('SCTOA_scroll_speed');
    $wp_SCTOA_toptext = get_option('SCTOA_toptext');
    $wp_SCTOA_centertext = get_option('SCTOA_centertext');
    $wp_SCTOA_bottomtext = get_option('SCTOA_bottomtext');
    
    $wp_SCTOA_bgColor = get_option('SCTOA_bgColor');
    $wp_SCTOA_textColor = get_option('SCTOA_textColor');
	$wp_SCTOA_float = get_option('SCTOA_float');
  
	if($wp_SCTOA_toptext){$wp_SCTOA_toptext=$wp_SCTOA_toptext;}else{$wp_SCTOA_toptext="Scroll to Top";}
	if($wp_SCTOA_centertext){$wp_SCTOA_centertext=$wp_SCTOA_centertext;}else{$wp_SCTOA_centertext="000000";}
	if($wp_SCTOA_bottomtext){$wp_SCTOA_bottomtext=$wp_SCTOA_bottomtext;}else{$wp_SCTOA_bottomtext="000000";}
	if($wp_SCTOA_bgColor){$wp_SCTOA_bgColor=$wp_SCTOA_bgColor;}else{$wp_SCTOA_bgColor="000000";}
	if($wp_SCTOA_textColor){$wp_SCTOA_textColor=$wp_SCTOA_textColor;}else{$wp_SCTOA_textColor="ffffff";}



  
    
	echo "<style type='text/css'>
	.scroll-to-top{";
	if($wp_SCTOA_float == "Left")
	{
	echo "	bottom:50px;
		left:20px;
	";	
	}
	elseif($wp_SCTOA_float == "Center"){
		
	echo "	bottom:50px;
		left:47%;
	";	
		
	}
	elseif($wp_SCTOA_float == "Right"){
	echo "	
	bottom:40px;
	right:70px;
	";	
	
	}
	else{
	echo "	
	bottom:50px;
	right:70px;
	";	
		
		
	}	
	echo "}
	</style>";


     ?>
	<style type="text/css">
    
    
    /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
    .scroll-btn-container select {
        padding-right: 24px
    }
    }
    .scroll-btn-container label {
        position: relative
    }
   
	 .scroll-btn-container .SCTbtn {
  -webkit-border-radius: 9;
  -moz-border-radius: 9;
  border-radius: 9px;
  -webkit-box-shadow: 0px 1px 3px #<?php echo $wp_SCTOA_bottomtext;?> !important;
  -moz-box-shadow: 0px 1px 3px #<?php echo $wp_SCTOA_bottomtext;?> !important;
  box-shadow: 0px 1px 3px #<?php echo $wp_SCTOA_bottomtext;?> !important;
  font-family: Georgia !important !important;
  color: #<?php echo $wp_SCTOA_textColor;?> !important;
  font-size: 12px !important;
  background: #<?php echo $wp_SCTOA_bgColor;?> !important;
  padding: 10px 20px 10px 20px !important;
  text-decoration: none !important;
  z-index:999999999999999 !important;
  width:100%;
  text-transform:lowercase !important;
}

 .scroll-btn-container .SCTbtn:hover {
  background: #<?php echo $wp_SCTOA_centertext;?> !important;
  text-decoration: none !important;
  z-index:999999999999999 !important;

}
	
	
    </style>
<style type="text/css">
		#plugin-title {
			width:772px;
			height:250px;
			background-size:772px 250px;
		}
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
			only screen and (-o-min-device-pixel-ratio: 15/10),
			only screen and (min-resolution: 144dpi),
			only screen and (min-resolution: 1.5dppx)
		{
			#plugin-title {
			}
		}
		</style>
    <div class="scroll-btn-container">
      <div class="scroll-to-top" id="scroll-to-top">
        <div  style="width:150px; border-radius:10px; height:100px;">
          <label>
            <button id="sel_change" class="SCTbtn SCTtop"><?php echo $wp_SCTOA_toptext;?></button>
           
          </label>
        </div>
      </div>
    </div>

	<script>
   jQuery('#scroll-to-top').hide();
   jQuery(window).scroll(function () {
	   
    if (jQuery(this).scrollTop() != 0) {
      jQuery('#scroll-to-top').fadeIn();
    } else {
      jQuery('#scroll-to-top').fadeOut();
    }
  });
	jQuery(document).ready(function() {
	jQuery("#sel_change").click(function(){ 
	
	
	//alert ("change event occured with value: " + document.getElementById("sel_change").value);
	jQuery("html,body").animate({ scrollTop: 0 }, <?php if($wp_SCTOA_scroll_speed=="") echo "1000"; else echo "$wp_SCTOA_scroll_speed";?>);
	
	return false;
	
	});
	
});

	</script>