<?php require(INCLUDE_PATH . "htmldiffhead.php");?>
<?php require(INCLUDE_PATH . "headjobsearch.php");?>
<title><?php echo $page_title;?></title>
<?php	
	include(INCLUDE_PATH . "body.php");
?>
<?php echo loading_modal();?>
<div class="container pad-top-6" id="main-content">	
	<div class="row">
		<div class="col-md-2 pad-4">						
			<input type="hidden" value="ba" id="current_search_size">
			<div id="search_container" class="mhi-350"><div class="search_component"><span class="hidden-sm hidden-md hidden-lg">Loading <span id="loading-job-data"></span></span></div></div>						
			<div class="mar-top-9 hidden-xs hidden-sm"><a href="http://www.khmer8.com/" target="_blank"><img src="<?php echo SRC_APPLICATION . "khmer8-1.0.4.jpg";?>" class="img-responsive" width="185" height="243" alt="Job"></a></div>									
			<div class="mar-top-9 hidden-xs hidden-sm"><a href="http://www.ezediscount.com/" target="_blank"><img src="<?php echo SRC_APPLICATION . "ezediscount-1.0.3.jpg";?>" width="185" height="186" alt="All Discount" class="img-responsive"></a></div>
			<div class="mar-top-9 hidden-xs hidden-sm"><a href="http://www.bayonpost.com/" target="_blank"><img src="<?php echo SRC_APPLICATION . "bayonpost.jpg";?>" width="185" height="250" alt="News" class="img-responsive"></a></div>
		</div>
		
		<div class="col-md-10">
			<div class="row">			
				<div class="col-md-9 pad-4">										
					<div>
						<div id="browse-job" class="mhi-450 hidden-xs"></div>
						<div id="container"></div>												
						<div id="carousel-product" class="carousel hidden-xs hidden-sm slide mar-top--12" data-ride="carousel"></div>
						<div id="feature_employer" class="mar-top-9"></div>
						<a href="#" class="back-to-top well well-sm"><i class="glyphicon glyphicon-chevron-up"></i> Back to Top</a>
					</div>
				</div>

				<div class="col-md-3 pad-4">
					<div>																
						<div class="hidden-xs hidden-sm"><a href="<?php echo REGISTER_URL;?>" class="btn btn-danger btn-lg btn-block bootstro" role="button" data-bootstro-title="Post Job" data-bootstro-content="Click here to post job. It's <strong>free</strong> and will always be." data-bootstro-placement="bottom">Free Post Job</a></div>						
						<div id="sidebar">															
							<div class="panel panel-default mar-top-9 hidden-xs hidden-sm mhi-400 maxh-400" id="recent-job"></div>
							<a href="https://plus.google.com/108772647571360185107" rel="publisher"></a>
							<div class="mar-top-9 hidden-md"><?php echo like_social();?></div>
							<div class="mar-top-9 _8080 hidden-md hidden-lg">&nbsp;</div>
							<div class="mar-top-9 _8080 hidden-xs hidden-sm hidden-md"><?php echo HOST_NICKNAME;?> &copy;2014</div>
						</div>									
					</div>
				</div>				
			</div>			
		</div>
	</div>	
</div>
<?php include(INCLUDE_PATH . "footer.php");?>
<script>
var is_new_homepage = <?php echo isset($_SESSION['is_new_homepage']) ? 1 : 0;?>;
var highlight_job_refresh = <?php echo HIGHLIGHT_JOB_REFRESH;?>;
var homepage_job_refresh = <?php echo HOMEPAGE_JOB_REFRESH;?>;
var company_profile_popover = "<?php echo COMPANY_PROFILE_POPOVER;?>";
var job_url = "<?php echo JOB_URL;?>";
var search_job_url = "<?php echo SEARCH_JOB_URL;?>";
var get_job_url = "<?php echo GET_JOB_URL;?>";
var get_browse_cat_url = "<?php echo GET_BROWSE_CAT_URL;?>";
var get_homepage_carousel_url = "<?php echo GET_HOMEPAGE_CAROUSEL_URL;?>";
var get_browse_loc_url = "<?php echo GET_BROWSE_LOC_URL;?>";
var get_browse_ind_url = "<?php echo GET_BROWSE_IND_URL;?>";
var get_recent_job_url = "<?php echo GET_RECENT_JOB_URL;?>";
var get_feature_employer_url = "<?php echo GET_FEATURE_EMPLOYER_URL;?>";
var get_highlight = "<?php echo GET_HIGHLIGHT;?>";
run_js_at_onload(download_js_at_onload("<?php echo JS_PATH;?>vjob.js"));
</script>
<?php if (isset($_SESSION['is_new_homepage'])) unset($_SESSION['is_new_homepage']);//need to unset this session, new user only the first time, if user browse page back, it's old user?>
<?php include(INCLUDE_PATH . "endhtml.php");?>