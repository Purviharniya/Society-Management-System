<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- fontawesome-icons -->
<link rel="stylesheet" href="../../vendor/fontawesome-free/css/all.min.css" type="text/css">

<!-- Custom styles for this template-->
<link href="../../vendor/css/sb-admin-2.min.css" rel="stylesheet">
<link href="../../vendor/css/sb-admin-2.css" rel="stylesheet">

<link href="../../vendor/css/fonts.css" rel="stylesheet">
<link href="../../vendor/css/index.css" rel="stylesheet">
<!-- SWIPER JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="index.php">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-fw fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3 my-5">SMS</div>
    </a>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-users fa-fw"></i>
            <span>Users</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-tags"></i>
            <span>Bills</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_bills.php">View Bills</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-users" aria-hidden="true"></i>
            <span>Complaints</span>
        </a>
        <div id="collapsePages4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="unresolved_complaints.php">Raise Complaint</a>
                <a class="collapse-item" href="progress_complaints.php">View Complaints</a>
                <a class="collapse-item" href="resolved_complaints.php">Delete Complaints</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <span>Visitors</span>
        </a>
        <div id="collapsePages5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_visitors.php">Add Visitors</a>
                <a class="collapse-item" href="manage_new_visitors.php">Manage New Visitors</a>
                <a class="collapse-item" href="manage_old_visitors.php">Manage Old Visitors</a>
                <a class="collapse-item" href="manage_all_visitors.php">Manage All Visitors</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-search" aria-hidden="true"></i>
            <span>Search</span>
        </a>
        <div id="collapsePages6" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="search_visitor.php">Search Visitor</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages7" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-file" aria-hidden="true"></i>
            <span>Report</span>
        </a>
        <div id="collapsePages7" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="visitor_reports.php">Visitors b/w dates</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages8" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-shield-alt" aria-hidden="true"></i>
            <span>Security</span>
        </a>
        <div id="collapsePages8" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_security.php">View Security</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages9" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-clock" aria-hidden="true"></i>
            <span>Meetings</span>
        </a>
        <div id="collapsePages9" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="schedule_meetings.php">View Meetings</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="shoutbox.php">
            <i class="fas fa-fw fa-volume-up"></i>
            <span>Shoutbox</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block mb-5">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/js/sb-admin-2.min.js"></script>

        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>