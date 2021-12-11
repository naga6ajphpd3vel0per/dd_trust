<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try {
			ace.settings.loadState('sidebar')
		} catch (e) {
		}
	</script>
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>
			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>
			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>
			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>
			<span class="btn btn-info"></span>
			<span class="btn btn-warning"></span>
			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->
	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo base_url(); ?>">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashborad </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> MEMBERS </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="<?php echo base_url('main/users/form'); ?>"><i class="menu-icon fa fa-caret-right"></i>ADD USER</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/manage/Member'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE MEMBER</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/manage/Non-Member'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE NON-MEMBER</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/manage/Staff'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE STAFF</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/manage/Admin'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE ADMIN</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/reports'); ?>"><i class="menu-icon fa fa-caret-right"></i>USER REPORTS</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/users/del_users'); ?>"><i class="menu-icon fa fa-caret-right"></i>DELETED USER</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> DONATIONS </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="<?php echo base_url('main/donation/form'); ?>"><i class="menu-icon fa fa-caret-right"></i>ADD RECEIPT</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/donation/manage'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE DONATION</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/donation/reports'); ?>"><i class="menu-icon fa fa-caret-right"></i>REPORTS</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/donation/del_donation'); ?>"><i class="menu-icon fa fa-caret-right"></i>DELETED DONATION</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> EXPENSES </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="<?php echo base_url('main/expense/form'); ?>"><i class="menu-icon fa fa-caret-right"></i>ADD VOUCHER</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/expense/manage'); ?>"><i class="menu-icon fa fa-caret-right"></i>MANAGE EXPENSES</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/expense/reports'); ?>"><i class="menu-icon fa fa-caret-right"></i>REPORTS</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo base_url('main/expense/del_expense'); ?>"><i class="menu-icon fa fa-caret-right"></i>DELETED EXPENSES</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
		   data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
