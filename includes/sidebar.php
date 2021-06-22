<aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="<?php echo BASE_URL?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
  
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">Student</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>student/" class="menu-link">Add / Manage student</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>student/attendance.php" class="menu-link">Attendance</a>
                    </li>
   
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Academics</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/class.php" class="menu-link">Class</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/level.php" class="menu-link">Levels</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/subject.php" class="menu-link">Subject</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/subject-to-class.php" class="menu-link">Subject to Class</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/session.php" class="menu-link">Session</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>Academics/shift.php" class="menu-link">Shift</a>
                    </li>
                 
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->

                <!-- <li class="menu-header">Accounting </li>/.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">Finance</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>finance/" class="menu-link">Collect fee</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>finance/fee-payments.php" class="menu-link">Fee payments</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>finance/fee-type.php" class="menu-link">Fee type</a>
                    </li>
                    <li class="menu-item">
                      <a href="<?php echo BASE_URL ?>finance/accounts.php" class="menu-link">Accounts</a>
                    </li>
   
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->


                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-dollar-sign"></span> <span class="menu-text">Income</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>income/type.php" class="menu-link">Income type</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>income/" class="menu-link">Add income</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->


                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-file-invoice"></span> <span class="menu-text">Expense</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL;?>expense/type.php" class="menu-link">Expense type</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>expense/" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?= BASE_URL ?>finance/income.php" class="menu-link"><span class="menu-icon fa fa-pen"></span> <span class="menu-text">Exam</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>" class="menu-link">Expense head</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?= BASE_URL ?>/finance/income.php" class="menu-link"><span class="menu-icon fa fa-users"></span> <span class="menu-text">Human Resources</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Expense head</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?= BASE_URL ?>/finance/income.php" class="menu-link"><span class="menu-icon fa fa-lock"></span> <span class="menu-text">Permission</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Expense head</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?= BASE_URL ?>/finance/income.php" class="menu-link"><span class="menu-icon fa fa-file"></span> <span class="menu-text">Reports</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Expense head</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->

                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="<?= BASE_URL ?>/finance/income.php" class="menu-link"><span class="menu-icon fa fa-file"></span> <span class="menu-text">Setting</span></a>
                  <ul class='menu'>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Expense head</a>
                    </li>
                    <li class='menu-item'>
                      <a href="<?= BASE_URL ?>/" class="menu-link">Add Expense</a>
                    </li>
                  </ul>
                </li><!-- /.menu-item -->
                
                <!-- .menu-item -->
                <!-- <li class="menu-item">
                  <a href="<?php //BASE_URL ?>/finance/expense.php" class="menu-link"><span class="menu-icon fa fa-file-invoice"></span> <span class="menu-text">Expense</span></a>
                </li>/.menu-item -->
               
                
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->