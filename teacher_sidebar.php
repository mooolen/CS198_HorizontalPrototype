<div class="row-fluid">
	<div class="span3">
	 <div class="sidebar">
			<ul>
				<li <?php if(isset($active_nav) && $active_nav == 'DASHBOARD') echo 'class="active"'?>>
					<a href="teacher_home.php">
						<div class="sidebar-icon fui-list"></div>
						<div class="sidebar-content">DASHBOARD</div>
					</a>
				</li>

				<li <?php if(isset($active_nav) && $active_nav == 'CLASSES') echo 'class="active"'?>>
					<a href="teacher_class.php">
						<div class="sidebar-icon fui-calendar-solid"></div>
						<div class="sidebar-content">CLASSES</div>
					</a>
				</li>

				<li <?php if(isset($active_nav) && $active_nav == 'EXAMS') echo 'class="active"'?>>
					<a href="teacher_addExam.php">
						<div class="sidebar-icon fui-eye"></div>
						<div class="sidebar-content">EXAMS</div>
					</a>
				</li>
				<li <?php if(isset($active_nav) && $active_nav == 'REPORTS') echo 'class="active"'?>>
					<a href="teacher_addExam.php">
						<div class="sidebar-icon fui-cmd"></div>
						<div class="sidebar-content">REPORTS</div>
					</a>
				</li>
			</ul>
		</div>
	</div>