<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-secret"></i>
        </div>
    <div class="sidebar-brand-text mx-3">RedShop</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider mt-3">

<!-- Heading -->
<div class="sidebar-heading">
    Administrator
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('index.php/admin') ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu 
<li class="nav-item">
    <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li> -->

<!-- Nav Item - Product Collapse Menu -->
<li class="nav-item">
    <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-folder"></i>
        <span>Produk</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('index.php/admin/produk') ?>">Lihat Produk</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/admin/produk/add') ?>">Tambah Produk</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider mt-3">
<!-- Heading  -->
<div class="sidebar-heading">
    User
</div>

<!-- Nav Item - Pages Collapse Menu  -->
<!-- <li class="nav-item">
    <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li> -->

<!-- Nav Item - Charts  -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('index.php/admin/dashboard/profil') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Profil Saya</span></a>
</li>

<!-- Nav Item - Charts  -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('index.php/admin/dashboard/editprofil') ?>">
        <i class="fas fa-fw fa-user-edit"></i>
        <span>Edit Profil</span></a>
</li>

<!-- Nav Item - Charts  -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('index.php/admin/dashboard/editpass') ?>">
        <i class="fas fa-fw fa-key"></i>
        <span>Ubah Password</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('index.php/admin/auth/logout') ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider mt-3 d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>