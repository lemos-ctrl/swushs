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
                    aria-expanded="<?php if ($current_page == 'rooms.php' || $current_page == 'subjectBudget.php') echo 'true'; else echo 'false'; ?>"><i class="fa-solid fa-file-lines pe-2"></i>
                    Curriculum
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled <?php if ($current_page == 'rooms.php' || $current_page == 'subject.php' || $current_page == 'strand.php') echo 'show'; ?>" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="../Features/schoolYear.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'schoolYear.php') echo 'active'; ?>">School Year</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/rooms.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'rooms.php') echo 'active'; ?>">Rooms</a>
                    </li>
                    
                    <li class="sidebar-item">
                        <a href="../Features/strand.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'strand.php') echo 'active'; ?>">Strands</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/subject.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'subject.php') echo 'active'; ?>">Subjects</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/calendar.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'calendar.php') echo 'active'; ?>">Calendar</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                    aria-expanded="<?php if ($current_page == 'faculty.php') echo 'true'; else echo 'false'; ?>"><i class="fa-regular fa-user pe-2"></i>
                    Staff
                </a>
                <ul id="posts" class="sidebar-dropdown list-unstyled <?php if ($current_page == 'faculty.php') echo 'show'; ?>" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="../Features/faculty.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'faculty.php') echo 'active'; ?>">Faculty</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                    aria-expanded="<?php if ($current_page == 'subjectBudget.php') echo 'true'; else echo 'false'; ?>"><i class="fa-solid fa-sliders pe-2"></i>
                    Timetable Generation
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled <?php if ($current_page == 'subjectBudget.php') echo 'show'; ?>" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="../Features/subjectBudget.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'subjectBudget.php') echo 'active'; ?>">Subject Budget</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/loadScheduling.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'loadScheduling.php') echo 'active'; ?>">Load Scheduling</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/facultyLoading.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'facultyLoading.php') echo 'active'; ?>">Faculty Loading</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/roomAssignment.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'roomAssignment.php') echo 'active'; ?>">Room Assignment</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Resources
            </li>
        </ul>
        <ul class="sidebar-nav mt-auto">
            <li class="sidebar-item">
                <a href="../../index.php" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Logout
                </a>
            </li>
        </ul>

</aside>
