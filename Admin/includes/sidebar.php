<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside id="sidebar" class="js-sidebar">
    <!-- Content For Sidebar -->
    <div class="h-100 sidebar-background">
        <div class="sidebar-logo">
            <a href="#">Logo</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin Elements
            </li>
            <li class="sidebar-item d-flex align-items-center <?php if ($current_page == 'dashboard.php') echo 'active'; ?>">
                <a href="./dashboard.php" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                    aria-expanded="<?php if ($current_page == 'schoolyear.php' || $current_page == 'subjectbudget.php') echo 'true'; else echo 'false'; ?>"><i class="fa-solid fa-file-lines pe-2"></i>
                    Curriculum
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled <?php if ($current_page == 'schoolyear.php' || $current_page == 'subjectbudget.php') echo 'show'; ?>" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="../Features/schoolyear.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'schoolyear.php') echo 'active'; ?>">School Years</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/subjectbudget.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'subjectbudget.php') echo 'active'; ?>">Subject Budget</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                    aria-expanded="<?php if ($current_page == 'faculty.php') echo 'true'; else echo 'false'; ?>"><i class="fa-regular fa-user pe-2"></i>
                    People
                </a>
                <ul id="posts" class="sidebar-dropdown list-unstyled <?php if ($current_page == 'faculty.php') echo 'show'; ?>" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="../Features/faculty.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'faculty.php') echo 'active'; ?>">Faculty</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                    Timetable Generation
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link sidebar-link-child">Load Scheduling</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link sidebar-link-child">Faculty Loading</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link sidebar-link-child">Room Assignment</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Resources
            </li>
            
            <li class="sidebar-item">
                <a href="../../index.php" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</aside>

