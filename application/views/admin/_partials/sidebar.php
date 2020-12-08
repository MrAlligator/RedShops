<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-secret"></i>
        </div>
    <div class="sidebar-brand-text mx-3">RedShop</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider mt-3">

<?php 
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT user_menu.id, menu FROM user_menu JOIN user_access_menu ON user_menu.id = user_access_menu.menu_id WHERE user_access_menu.role_id = $role_id ORDER BY user_access_menu.menu_id ASC";
    $menu = $this->db->query($queryMenu)->result_array();
?>

<?php foreach ($menu as $m) : ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>

    <?php 
    $menuId = $m['id'];
    $querySubMenu = "SELECT * FROM user_sub_menu WHERE menu_id = $menuId AND is_active = '1'";
    $subMenu = $this->db->query($querySubMenu)->result_array();
    ?>

    <?php foreach ($subMenu as $sm) : ?>
    <?php if ($title == $sm['title']) : ?>
        <li class="nav-item active">
    <?php else : ?>
        <li class="nav-item">
    <?php endif ; ?>
            <a class="nav-link" href="<?= base_url($sm['url']) ?>">
                <i class="<?php echo $sm['icon'] ?>"></i>
            <span><?= $sm['title'] ?></span></a>
        </li>
    <?php endforeach; ?>

<!-- Nav Item - Product Collapse Menu -->
<li class="nav-item">
    <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-folder"></i>
        <span>Produk</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/produk') ?>">Lihat Produk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/produk/add') ?>">Tambah Produk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/Jumlah pesanan') ?>">Jumlah Pesanan</a>


        </div>
    </div>
</li>

<?php endforeach; ?>

<div class="sidebar-heading">
    Aksi
</div>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link pb-0" href="<?php echo base_url('admin/auth/logout') ?>">
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