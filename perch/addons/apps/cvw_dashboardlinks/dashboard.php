<?php
	$API  = new PerchAPI(1.0, 'cvw_dashboardlinks');
	$HTML = $API->get('HTML');
	$Lang  = $API->get('Lang');
	$Settings = $API->get('Settings');
	
	// for later
	// $url1 = $Settings->get('cvw_dashboardlinks_url1')->settingValue();
	// $url2 = $Settings->get('cvw_dashboardlinks_url2')->settingValue();

	 ?>
<div class="widget">
<div class="dash-content">
	<header>
		<h2><?php echo $Lang->get('Dashboard Links'); ?></h2>
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
				<li>
				<a href="<?php echo $Settings->get('cvw_dashboardlinks_url1')->settingValue(); ?>">
				<?php echo $Settings->get('cvw_dashboardlinks_linktext1')->settingValue(); ?></a></li>
				<li>
				<a href="<?php echo $Settings->get('cvw_dashboardlinks_url2')->settingValue(); ?>">
				<?php echo $Settings->get('cvw_dashboardlinks_linktext2')->settingValue(); ?></a></li>
			</ul>
		</div>
	</div> 
</div>