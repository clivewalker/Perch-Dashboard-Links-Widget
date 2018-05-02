<?php
	$API  = new PerchAPI(1.0, 'cvw_dashboardlinks');
	$HTML = $API->get('HTML');
	$Lang  = $API->get('Lang');
	$Settings = $API->get('Settings');
	
	$url1 = $Settings->get('cvw_dashboardlinks_url1')->settingValue();
	$url2 = $Settings->get('cvw_dashboardlinks_url2')->settingValue();
	$url3 = $Settings->get('cvw_dashboardlinks_url3')->settingValue();
	$linktext1 = $Settings->get('cvw_dashboardlinks_linktext1')->settingValue();
	$linktext2 = $Settings->get('cvw_dashboardlinks_linktext2')->settingValue();
	$linktext3 = $Settings->get('cvw_dashboardlinks_linktext3')->settingValue();
	$dashboardlinksheading = $Settings->get('cvw_dashboardlinks_heading')->settingValue();

	 ?>
<div class="widget">
<div class="dash-content">
	<header>
		<h2><?php echo $dashboardlinksheading; ?></h2>
		<?php $link = $HTML->encode(PERCH_LOGINPATH.'/core/settings/#cvw_dashboardlinks'); 
				echo '<a class="button button-small button-icon icon-left action-info" href="'.$link.'">';
			?>
			<div>
				<span><?php echo $Lang->get('Settings'); ?></span>
			</div>
			</a>
	</header>
		<div class="body">
			<ul class="dash-list">
				<li><a href="<?php echo $url1; ?>"><?php echo $linktext1; ?></a></li>
				<li><a href="<?php echo $url2; ?>"><?php echo $linktext2; ?></a></li>
				<li><a href="<?php echo $url3; ?>"><?php echo $linktext3; ?></a></li>
			</ul>
		</div>
	</div> 
</div>