<?php 
/**
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 13:27 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 * @contact (+62)856-299-4114
 *
 */

 $this->beginContent('//layouts/default');
	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	if($module == null)
		$class = $controller;
		
	else {
		if($controller == 'admin')
			$class = $module;
		else
			$class = $module.'-'.$controller;
		if($module == 'users' && $currentAction == 'admin/login')
			$class = 'login';
	}
?>

<!-- Page Loader -->
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<p>Please wait...</p>
	</div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Search  -->
<div class="search-bar">
	<div class="search-icon"> <i class="material-icons">search</i> </div>
	<input type="text" placeholder="Explore adminX...">
	<div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar clearHeader">
	<div class="navbar-header">
		<a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html"><img class="logo" src="assets/images/logo.svg" alt="profile img">Hospital</a>	
		<ul class="nav navbar-nav navbar-right">
			<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
			<li class="dropdown menu-app"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
				<ul class="dropdown-menu">
					<li class="body">
						<ul class="menu">
							<li>
								<ul>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="dropdown msg-notification"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-email"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">Messages</li>
					<li class="body">
						<ul class="menu">
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar1.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar2.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar3.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar4.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
				</ul>
			</li>
			<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">NOTIFICATIONS</li>
					<li class="body">
						<ul class="menu">
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-light-green"> <i class="material-icons">person_add</i> </div>
								<div class="menu-info">
									<h4>12 new members joined</h4>
									<p> <i class="material-icons">access_time</i> 14 mins ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
								<div class="menu-info">
									<h4>4 sales made</h4>
									<p> <i class="material-icons">access_time</i> 22 mins ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-red"> <i class="material-icons">delete_forever</i> </div>
								<div class="menu-info">
									<h4><b>Nancy Doe</b> deleted account</h4>
									<p> <i class="material-icons">access_time</i> 3 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-orange"> <i class="material-icons">mode_edit</i> </div>
								<div class="menu-info">
									<h4><b>Nancy</b> changed name</h4>
									<p> <i class="material-icons">access_time</i> 2 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-blue-grey"> <i class="material-icons">comment</i> </div>
								<div class="menu-info">
									<h4><b>John</b> commented your post</h4>
									<p> <i class="material-icons">access_time</i> 4 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-light-green"> <i class="material-icons">cached</i> </div>
								<div class="menu-info">
									<h4><b>John</b> updated status</h4>
									<p> <i class="material-icons">access_time</i> 3 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
								<div class="menu-info">
									<h4>Settings updated</h4>
									<p> <i class="material-icons">access_time</i> Yesterday </p>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
				</ul>
			</li>
			<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle " data-toggle="dropdown" role="button"> <i class="zmdi zmdi-format-list-bulleted"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">TASKS</li>
					<li class="body">
						<ul class="menu tasks">
							<li> <a href="javascript:void(0);">
								<h4> Footer display issue <small>72%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Make new buttons <small>56%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Create new dashboard <small>68%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Solve transition issue <small>77%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Answer GitHub questions <small>87%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
				</ul>
			</li>
			<li><a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
			<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-sort-amount-desc"></i></a></li>			
		</ul>
	</div>
</nav>
<!-- #Top Bar --> 

<!-- main sidebar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar"> 
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li> 
					<!-- User Info -->
					<div class="user-info">
						<div class="admin-image"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="profile img"> </div>
						<div class="admin-action-info">
							<span>Welcome</span>
							<h3>Dr.John Smith</h3>
							<ul>
								<li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
								<li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
								<li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- #User Info --> 
				</li>
				<li class="header">MAIN NAVIGATION</li>
				<li class="active open"><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
				<li><a href="dashboard-rtl.html"><i class="zmdi zmdi-home"></i><span>Dashboard RTL</span></a></li>											   
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
					<ul class="ml-menu">
						<li><a href="doctor-schedule.html">Doctor Schedule</a></li>
						<li><a href="book-appointment.html">Book Appointment</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
					<ul class="ml-menu">
						<li><a href="doctors.html">All Doctors</a></li>
						<li><a href="add-doctor.html">Add Doctor</a></li>					   
						<li><a href="profile.html">Doctor Profile</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
					<ul class="ml-menu">
						<li><a href="patients.html">All Patients</a></li>
						<li><a href="add-patient.html">Add Patient</a></li>					   
						<li><a href="patient-profile.html">Patient Profile</a></li>
						<li><a href="patient-invoice.html">Patient Invoice</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
					<ul class="ml-menu">
						<li> <a href="payments.html">Payments</a></li>
						<li> <a href="add-payments.html">Add Payment</a></li>
						<li> <a href="patient-invoice.html">Patient Invoice</a></li>
					</ul>
				</li>
				<li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
				<li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
				<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
					<ul class="ml-menu">
						<li> <a href="sign-in.html">Sign In</a> </li>
						<li> <a href="sign-up.html">Sign Up</a> </li>
						<li> <a href="forgot-password.html">Forgot Password</a> </li>
						<li> <a href="404.html">Page 404</a> </li>
						<li> <a href="500.html">Page 500</a> </li>
						<li> <a href="page-offline.html">Page Offline</a> </li>
						<li> <a href="locked.html">Locked Screen</a> </li>
						<li> <a href="blank.html">Blank Page</a> </li>
						<li><a href="chat.html">Chat</a></li>
						<li><a href="search-results.html">Search Results</a></li>
					</ul>
				</li>
				<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
					<ul class="ml-menu">
						<li> <a href="typography.html">Typography</a> </li>
						<li> <a href="helper-classes.html">Helper Classes</a></li>
						<li> <a href="alerts.html">Alerts</a> </li>
						<li> <a href="animations.html">Animations</a> </li>
						<li> <a href="badges.html">Badges</a> </li>
						<li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
						<li> <a href="buttons.html">Buttons</a> </li>
						<li> <a href="collapse.html">Collapse</a> </li>
						<li> <a href="colors.html">Colors</a> </li>
						<li> <a href="dialogs.html">Dialogs</a> </li>
						<li> <a href="icons.html">Icons</a> </li>
						<li> <a href="labels.html">Labels</a> </li>
						<li> <a href="list-group.html">List Group</a> </li>
						<li> <a href="media-object.html">Media Object</a> </li>
						<li> <a href="modals.html">Modals</a> </li>
						<li> <a href="notifications.html">Notifications</a> </li>
						<li> <a href="pagination.html">Pagination</a> </li>
						<li> <a href="preloaders.html">Preloaders</a> </li>
						<li> <a href="progressbars.html">Progress Bars</a> </li>
						<li> <a href="range-sliders.html">Range Sliders</a> </li>
						<li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
						<li> <a href="tabs.html">Tabs</a> </li>
						<li> <a href="waves.html">Waves</a> </li>
					</ul>
				</li>
				<li class="header">LABELS</li>
				<li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
				<li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
				<li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
			</ul>
		</div>
		<!-- #Menu --> 
	</aside>
	<!-- #END# Left Sidebar --> 
	<!-- Right Sidebar -->
	<aside id="rightsidebar" class="right-sidebar">
		<ul class="nav nav-tabs tab-nav-right">
			<li class="nav-item"><a href="#settings" class="nav-link active" data-toggle="tab">Setting</a></li>
			<li class="nav-item"><a href="#chat" class="nav-link" data-toggle="tab">Chat</a></li>
			<li class="nav-item"><a href="#activities" class="nav-link" data-toggle="tab">Activities</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane in active" id="settings">
				<div class="slim-scroll">
					<div class="card">
						<div class="header">
							<h2>Color OPTIONS</h2>
						</div>
						<div class="body" >
							<ul class="choose-skin m-b-0">
								<li data-theme="purple">
									<div class="purple"></div>
								</li>
								<li data-theme="blue">
									<div class="blue"></div>
								</li>
								<li data-theme="cyan" class="active">
									<div class="cyan"></div>
								</li>
								<li data-theme="green">
									<div class="green"></div>
								</li>
								<li data-theme="blush">
									<div class="blush"></div>
								</li>
							</ul>
							<ul class="list-unstyled m-b-0 theme-light-dark m-t-15">
								<li>
									<div class="t-dark">Dark</div>
								</li>
								<li>
									<div class="t-light">Light</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card">
						<div class="header">
							<h2>GENERAL SETTINGS</h2>
						</div>
						<div class="body" >
							<ul class="setting-list">
								<li> <span>Report Panel Usage</span>
									<div class="switch">
										<label>
											<input type="checkbox" checked>
											<span class="lever"></span></label>
									</div>
								</li>
								<li> <span>Email Redirect</span>
									<div class="switch">
										<label>
											<input type="checkbox">
											<span class="lever"></span></label>
									</div>
								</li>
								<li> <span>Notifications</span>
									<div class="switch">
										<label>
											<input type="checkbox" checked>
											<span class="lever"></span></label>
									</div>
								</li>
								<li> <span>Auto Updates</span>
									<div class="switch">
										<label>
											<input type="checkbox" checked>
											<span class="lever"></span></label>
									</div>
								</li>
								<li> <span>Offline</span>
									<div class="switch">
										<label>
											<input type="checkbox">
											<span class="lever"></span></label>
									</div>
								</li>
								<li> <span>Location Permission</span>
									<div class="switch">
										<label>
											<input type="checkbox" checked>
											<span class="lever"></span></label>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="chat">
				<div class="slim-scroll">
					<div class="m-t-15 m-l-15 m-r-15">
						<div class="search">
							<div class="input-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Search..." required autofocus>
								</div>
							</div>
						</div>
						<h6>Online</h6>
						<ul>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
									<div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
									<div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="online">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
						</ul>
						<h6>Offline</h6>
						<ul>
							<li class="offline">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
									<div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
								</div>
							</li>
							<li class="offline">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the you share the</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
							<li class="offline">
								<div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
									<div class="media-body">
										<div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti</span> <span class="badge badge-outline status"></span> </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane activities" id="activities">
				<div class="slim-scroll">
					<div class="m-t-15 m-l-15 m-r-15">
						<div class="streamline b-accent">
							<div class="sl-item">
								<div class="sl-content">
									<div class="text-muted">Just now</div>
									<p>Finished task <a href="" class="text-info">#features 4</a>.</p>
								</div>
							</div>
							<div class="sl-item b-info">
								<div class="sl-content">
									<div class="text-muted">10:30</div>
									<p><a href="">@Jessi</a> retwit your post</p>
								</div>
							</div>
							<div class="sl-item b-primary">
								<div class="sl-content">
									<div class="text-muted">12:30</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted">1 days ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
							<div class="sl-item b-primary">
								<div class="sl-content">
									<div class="text-muted">2 days ago</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-primary">
								<div class="sl-content">
									<div class="text-muted">3 days ago</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted">4 Week ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted">5 days ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
							<div class="sl-item b-primary">
								<div class="sl-content">
									<div class="text-muted">5 Week ago</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-primary">
								<div class="sl-content">
									<div class="text-muted">3 Week ago</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted">1 Month ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<!-- #END# Right Sidebar --> 
<section>

<!-- main content -->
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Dashboard</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>

		<?php echo $content;?>
	</div>
</section>

<?php $this->endContent(); ?>