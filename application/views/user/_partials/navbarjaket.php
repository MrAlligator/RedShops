<div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>"> RedShop </a>
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> 7 </a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="<?php echo base_url() ?>">Beranda</a></li>
              
              

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Kemeja  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/kemejapanjang') ?>">Kemeja lengan Panjang</a></li>
                  <li><a href="<?php echo base_url('user/kemejapendek') ?>">Kemeja Lengan Pendek</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Kaos  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/kaospanjang') ?>">Kaos Lengan Panjang</a></li>
                  <li><a href="<?php echo base_url('user/kaospendek') ?>">Kaos Lengan Pendek</a></li>
                 
                </ul>
              </li>

              <li class=""><a href="<?php echo base_url('user/jaket') ?>">Jaket</a></li>

              <!-- <li class="active dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Jaket  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/jaket') ?>"> Hoddie</a></li>
                </ul>
              </li> -->

              
          </div><!--/.nav-collapse -->


          <div class="search hidden-xs" data-style="hidden">
            <div class="input">
              <button type="button"><i class="ion-ios-search"></i></button>

              <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
          </div>
        </div><!--/.container-fluid -->