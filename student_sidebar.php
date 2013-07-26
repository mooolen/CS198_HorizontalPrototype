<div class="row-fluid">
	<div class="span3">
	 <div class="sidebar">
			<ul>
				<li <?php if(isset($active_nav) && $active_nav == 'DASHBOARD') echo 'class="active"'?>>
					<a href="student_home.php">
						<div class="sidebar-icon fui-list"></div>
						<div class="sidebar-content">DASHBOARD</div>
					</a>
				</li>

				<li <?php if(isset($active_nav) && $active_nav == 'CLASSES') echo 'class="active"'?>>
					<a href="student_class.php">
						<div class="sidebar-icon fui-calendar-solid"></div>
						<div class="sidebar-content">CLASSES</div>
					</a>
				</li>

				<li <?php if(isset($active_nav) && $active_nav == 'ESSAYS') echo 'class="active"'?>>
					<a href="student_viewEssay.php">
						<div class="sidebar-icon fui-eye"></div>
						<div class="sidebar-content">ESSAYS</div>
					</a>
				</li>
			</ul>
		</div>
	</div>