<div class="toplinks">
    <?php if (isset($user['username'])) : ?>
        <a href="#signin" data-toggle="modal" data-target="#logoutModal"> <i class="ion-unlocked"></i> Logout</a>
        <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
        <a href="<?= base_url("user/profile") ?>" class="hidden-xs"> <i class="ion-person"></i> Hai, <?= $user['name']; ?></a>
    <?php else : ?>
        <a href="#register" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Daftar</a>
        <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-locked"></i> Masuk</a>
        <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
    <?php endif; ?>
</div>