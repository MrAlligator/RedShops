<div class="toplinks">
<<<<<<< Updated upstream
<?php if (!$data['name']) : ?>
<a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Daftar</a>
<a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Masuk</a>
<a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
<?php else : ?>
  <a href="#signin" data-toggle="modal" data-target="#logoutModal"> <i class="ion-unlocked"></i> Logout</a>
  <a class="hidden-xs"> <?= $data['name']; ?> </a>
<?php endif; ?>

 
      
=======
      <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Daftar</a>
      <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Masuk</a>
      <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i>  </a>
>>>>>>> Stashed changes
    </div>