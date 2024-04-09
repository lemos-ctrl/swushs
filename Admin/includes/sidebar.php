<?php 
require_once '../includes/cdn.php';?>

<aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100 sidebar-background">
                <div class="sidebar-logo">
                    <a href="#">Admin</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin
                    </li>
                    <li class="sidebar-item d-flex align-items-center">
                        <a href="./dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-chart-line"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item d-flex align-items-center">
                        <a href="./attendance.php" class="sidebar-link">
                            <i class="fa-solid fa-person-running"></i>
                            Attendance
                        </a>
                    </li>
                    <li class="sidebar-item d-flex align-items-center">
                        <a href="./leaves.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Leave Management
                        </a>
                    </li>
                    <li class="sidebar-item d-flex align-items-center">
                        <a href="./master-data.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Master Data
                        </a>
                    </li>
                    <li class="sidebar-item d-flex align-items-center">
                        <a href="./settings.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Settings
                        </a>
                    </li>
                    <!--<li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Curriculum
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="./Features/schoolyear.php" class="sidebar-link sidebar-link-child">School Years</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="./Features/subjectbudget.php" class="sidebar-link sidebar-link-child">Subject Budget</a>
                            </li>
                        </ul>
                    </li>-->

                    <li class="sidebar-header">
                        Session
                    </li>

                    <li class="sidebar-item">
                        <a href="../index.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>