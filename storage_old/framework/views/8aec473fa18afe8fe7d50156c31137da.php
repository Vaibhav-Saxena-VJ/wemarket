	<?php
		$role_id = Auth::guard('arm_admins')->user()->role_id;
		$RolesPrivileges = App\Models\Arm_role_privilege::where('status', 'active')->where('id', $role_id)->select('privileges')->first();
	?>
	
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar scrollbar" id="style-7">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<!-- Dashboard start-->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'dashboard_view')): ?>
				<li class="s_meun dashboard_active ">
					<a href="<?php echo e(url('admin/dashboard')); ?>">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>
				<?php endif; ?>
				<!-- CMS (CONTENT MANAGEMENT SYSTEM) -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'master_view')): ?>
				<li class="treeview s_meun master_active ">
					<a href="javascript:;">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Master</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'category_view')): ?>
					<ul class="treeview-menu">
						<li class="s_meun master_category_active"><a href="<?php echo e(url('/admin/category')); ?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Category</span></a></li>
					</ul>
					<?php endif; ?>
				</li>
				<?php endif; ?>

				<!-- CMS -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'cms_view')): ?>
				<li class="treeview s_meun cms_menu_active ">
					<a href="javascript:;">
						<i class="fa fa-edit" aria-hidden="true"></i> <span>CMS</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'page_content_view')): ?>
							<li class="s_meun page_content_active"><a href="<?php echo e(url('/admin/page-content')); ?>"><i class="fa fa-edit"></i>Page Content</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'testimonials_view')): ?>
							<li class="s_meun testimonials_active"><a href="<?php echo e(url('/admin/testimonials')); ?>"><i class="fa fa-users"></i>Testimonials</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'privacy_policy_view')): ?>
							<li class="s_meun privacy_policy_active"><a href="<?php echo e(url('/admin/privacy-policy')); ?>"><i class="fa fa-users"></i>Privacy Policy</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'terms_of_use_view')): ?>
							<li class="s_meun terms_of_use_active"><a href="<?php echo e(url('/admin/terms-of-use')); ?>"><i class="fa fa-users"></i>Terms of Use</a></li>
						<?php endif; ?>
					</ul
					>
				</li>
				<?php endif; ?>
				<!-- CMS -->

				<!-- CMS -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'media_view')): ?>
				<li class="treeview s_meun media_menu_active ">
					<a href="javascript:;">
						<i class="fa fa-picture-o" aria-hidden="true"></i> <span>Media</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'blog_press_release_view')): ?>
							<li class="s_meun media_blogs_active"><a href="<?php echo e(url('/admin/blogs')); ?>"><i class="fa fa-th-large"></i>Blogs / Press Release</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'infographics_view')): ?>
							<li class="s_meun media_infographics_active"><a href="<?php echo e(url('/admin/infographics')); ?>"><i class="fa fa-picture-o"></i>Infographics</a></li>
						<?php endif; ?>
						<!-- <li class="s_meun media_press_release_active"><a href="<?php echo e(url('/admin/press-release')); ?>"><i class="fa fa-file-text-o"></i>Press Release</a></li> -->
					</ul>
				</li>
				<?php endif; ?>
				<!-- CMS -->

				<!-- PUBLISHERS OR REPORTS -->
				

				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'careers_view')): ?>
				<li class="s_meun careers_active">
					<a href="<?php echo e(url('/admin/careers')); ?>">
						<i class="fa fa-suitcase"></i> <span>Careers</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- ALL REPORTS -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'report_view')): ?>
				<li class="s_meun all_reports_active">
					<a href="<?php echo e(url('/admin/report')); ?>">
						<i class="fa fa-file-text-o"></i> <span>All Reports</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- Enquiry -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'enquiries_view')): ?>
				<li class="s_meun enquiry_active">
					<a href="<?php echo e(url('/admin/enquiry')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Enquiry</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- Payment Transaction -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'payment_transaction_details_view')): ?>
				<li class="s_meun payment_transaction_details_active">
					<a href="<?php echo e(url('/admin/payment-transaction-details')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Payment Transaction Details</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- Contact Enquiry -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'contact_enquiry_view')): ?>
				<li class="s_meun contact_enquiery_active">
					<a href="<?php echo e(url('/admin/contact-enquiry')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Contact Enquiry</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- Contact Enquiry -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'career_applicant_view')): ?>
				<li class="s_meun career_applicant_active">
					<a href="<?php echo e(url('/admin/career-applicant')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Career Applicant</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- News Letter Subscriber -->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'subscriber_view')): ?>
				<li class="s_meun subscriber_active">
					<a href="<?php echo e(url('/admin/subscriber')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Subscriber</span>
					</a>
				</li>
				<?php endif; ?>

				<!-- News Letter Subscriber -->
				<!-- <li class="s_meun roles_privileges">
					<a href="<?php echo e(url('/admin/roles-privileges')); ?>">
						<i class="fa fa-file-text-o"></i> <span>Roles & Privileges</span>
					</a>
				</li> -->

				<!--System User start-->
				<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'system_user_view')): ?>
				<li class="treeview s_meun system_user_active ">
					<a href="javascript:;">
						<i class="fa fa-cog" aria-hidden="true"></i> <span>System User</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'user_view')): ?>
							<li class="s_meun user_list_active"><a href="<?php echo e(url('admin/system-user-list')); ?>"><i class="fa fa-envelope"></i>User List</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'role_privileges_view')): ?>
							<li class="s_meun roles_privileges_active"><a href="<?php echo e(url('/admin/roles-privileges')); ?>"><i class="fa fa-bars"></i>Roles & Privileges</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>
				<!--System User end-->

				<!--Settings start-->
				<li class="treeview s_meun settings_active ">
					<a href="javascript:;">
						<i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_view')): ?>
							<li class="s_meun general_settings_active"><a href="<?php echo e(url('admin/general-settings-contact')); ?>"><i class="fa fa-bars"></i>General Settings</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'email_setting_view')): ?>
							<li class="s_meun email_settings_active"><a href="<?php echo e(url('admin/email-settings')); ?>"><i class="fa fa-envelope"></i>Email Settings</a></li>
						<?php endif; ?>
						<?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'visual_setting_view')): ?>
							<li class="s_meun visual_settings_active"><a href="<?php echo e(url('admin/visual-settings')); ?>"><i class="fa fa-eye"></i>Visual Settings</a></li>
						<?php endif; ?>
						<li class="s_meun change_password_active"><a href="<?php echo e(url('admin/change-password')); ?>"><i class="fa fa-key"></i>Change Password</a></li>
						<li class="s_meun logout_active"><a href="<?php echo e(url('admin/logout')); ?>"><i class="fa fa-power-off"></i>Logout</a></li>
					</ul>
				</li>
				<!--Settings end-->
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside><?php /**PATH /home/wemarketresearch/public_html/resources/views/admin/includes/sidebar.blade.php ENDPATH**/ ?>