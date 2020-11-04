<div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('user') ?>"> RedShop </a>
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> 7 </a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="<?php echo base_url('user') ?>">Beranda</a></li>
              
              

              <li class="active dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Kemeja  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/kemeja') ?>">Kemeja lengan Panjang</a></li>
                  <li><a href="<?php echo base_url('user/kemeja') ?>">Kemeja Lengan Pendek</a></li>
                 
                </ul>
              </li>

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Kaos  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/kaos') ?>">Kaos Lengan Panjang</a></li>
                  <li><a href="<?php echo base_url('user/kaos') ?>">Kaos Lengan Pendek</a></li>
                 
                </ul>
              </li>

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Jaket  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/jaket') ?>"> Hoddie</a></li>
                  <li><a href="<?php echo base_url('user/jaket') ?>">Jeans</a></li>
                  <li><a href="<?php echo base_url('user/jaket') ?>">Parka</a></li>
                  <li><a href="<?php echo base_url('user/jaket') ?>">Bomber</a></li>
                 
                </ul>
              </li>

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Celana  <i class="ion-android-arrow-dropdown"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('user/celana') ?>">Celana Panjang</a></li>
                  <li><a href="<?php echo base_url('user/celana') ?>">Celanaendek</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->


          <div class="search hidden-xs" data-style="hidden">
            <div class="input">
              <button type="button"><i class="ion-ios-search"></i></button>

              <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
          </div>
        </div><!--/.container-fluid -->