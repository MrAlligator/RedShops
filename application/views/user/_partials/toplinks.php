<div class="toplinks">
<?php if ($user['username']) : ?>
    <a href="#signin" data-toggle="modal" data-target="#logoutModal"> <i class="ion-unlocked"></i> Logout</a>
    <a class="hidden-xs"> <?= $user['username']; ?> </a>
<?php else : ?>
    <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Daftar</a>
    <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Masuk</a>
    <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
<?php endif; ?>
</div>
