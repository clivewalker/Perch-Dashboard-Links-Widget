<?php
   	if ($CurrentUser->logged_in()) {
   		$this->register_app('cvw_dashboardlinks', 'Dashboard Links', 1, 'Displaying useful links on the Perch dashboard', '0.1.0', true);
    	$this->require_version('cvw_dashboardlinks', '3.0');
    	$this->add_setting('cvw_dashboardlinks_heading', 'Dashboard Heading', 'text', '');
    	$this->add_setting('cvw_dashboardlinks_url1', 'URL', 'text', '');
      $this->add_setting('cvw_dashboardlinks_linktext1', 'Link Name', 'text', '');
      $this->add_setting('cvw_dashboardlinks_url2', 'Second URL', 'text', '');
		  $this->add_setting('cvw_dashboardlinks_linktext2', 'Second Link Name', 'text', '');
		  $this->add_setting('cvw_dashboardlinks_url3', 'Third URL', 'text', '');
      $this->add_setting('cvw_dashboardlinks_linktext3', 'Third Link Name', 'text', '');
	}
?>