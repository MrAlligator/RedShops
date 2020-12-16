<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Unistore Pro &middot; Premium Responsive E-Commerce Template</title>
    <?php $this->load->view("user/_partials/head.php") ?>
  </head>
  <body>
    <?php $this->load->view("user/_partials/cart.php") ?>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    
    <nav class="navbar navbar-default">
      <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>
    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">


    <section class="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-7 white no-padding">
            <div class="carousel-product" data-count="3" data-current="1">

              <div class="items">
                <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
                <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>

                <div class="item center" data-marker="1">
                  <img src="<?php echo base_url('assets/img/product/1.jpg') ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>
                
                <div class="item" data-marker="2">
                  <img src="<?php echo base_url('assets/img/product/2.jpg') ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>

                <div class="item" data-marker="3">
                  <img src="<?php echo base_url('assets/img/product/3.jpg') ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>
              </div>

              <ul class="markers">
                <li data-marker="1" class="active"></li>
                <li data-marker="2"></li>
                <li data-marker="3"></li>
              </ul>

            </div>
          </div>
          <div class="col-sm-5 col-md-5 no-padding-xs">
            <div class="caption">
              <img src="<?php echo base_url('assets/img/brands/microsoft.png') ?>" alt="Microsoft" class="brand hidden-xs hidden-sm" />

              <h1>Surface Studio</h1>

              <p> &middot; OS Windows™ 10</p>
              <p> &middot; 28 Inch PixelSense™ Display</p>
              <p> &middot; Intel Core i5/i7</p>
              <hr class="offset-md hidden-sm">
              <hr class="offset-sm visible-sm">
              <hr class="offset-xs visible-sm">

              <p class="price">$2 999.00</p>
              <p class="price through">$3 449.99</p>
              <hr class="offset-md">

              <button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button>
              <button class="btn btn-link"> <i class="ion-ios-heart"></i> See later </button>
            </div>
          </div>
        </div>
        <hr class="offset-sm hidden-xs">

        <div class="row">
          <div class="col-sm-7 white sm-padding">
            <hr class="offset-sm visible-xs">

            <h2 class="h1">Microsoft Surface Studio</h2>
            <br>

            <p>
              Visualize ideas as you paint, edit, and design. Let the 10-bit color depth and strikingly large 28” display pull you in from across the room. Or, lose yourself in the creative details of your work.
              Surface Studio is designed with a Zero Gravity Hinge that moves the display weightlessly from an upright angle, down into Studio Mode with one hand.
            </p>
            <br>

             <h2>Product specifications</h2>
             <br>

              <div class="row specification">
                <div class="col-sm-4"> <label>Operating system</label> </div>
                <div class="col-sm-8"> <p>Windows 10™</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Display</label> </div>
                <div class="col-sm-8">
                  <p>
                  Screen: 28" PixelSense Display<br>
                    Resolution: 4500 x 3000 (192 DPI)<br>
                    Color settings: sRGB, DCI-P3, and Vivid color profiles, individually color calibrated<br>
                    Touch: 10-point multi-touch
                  </p>
                </div>
              </div>
              
              <div class="row specification">
                <div class="col-sm-4"> <label>Processor</label> </div>
                <div class="col-sm-8"> <p>Quad-core 6th Gen Intel Core i5 or i7</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Processor technology</label> </div>
                <div class="col-sm-8"> <p>Intel Turbo Boost Technology</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Graphics</label> </div>
                <div class="col-sm-8"> <p>NVIDIA GeForce GTX 965M 2GB GPU GDDR5 memory or NVIDIA GeForce GTX 980M 4GB GPU GDDR5 memory</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Memory</label> </div>
                <div class="col-sm-8"> <p>8GB, 16GB, or 32GB RAM</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Hard drive</label> </div>
                <div class="col-sm-8"> <p>Rapid hybrid drive options: 64GB SSD with 1TB HDD, 128GB SSD with 1TB HDD, 128GB SSD with 2TB HDD</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Wireless</label> </div>
                <div class="col-sm-8">
                  <p>
                    Wi-Fi: 802.11ac Wi-Fi wireless networking, IEEE 802.11 a/b/g/n compatible<br>
                    Bluetooth: Bluetooth 4.0 wireless technology<br>
                    Xbox Wireless built-in
                  </p>
                </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Power supply</label> </div>
                <div class="col-sm-8"> <p>45 W AC power adapter</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Battery</label> </div>
                <div class="col-sm-8"> <p>3-cell, 36 Wh Li-ion</p> </div>
              </div>

              <hr class="offset-lg">
          </div>
          <div class="col-sm-5 no-padding-xs">
            <div class="talk white">
              <h2 class="h3">Do you have any questions?</h2>
              <p class="">Whatsuping now with our manager</p>
              <hr class="offset-md">

              <a href="tel:+80005554465" class="btn btn-primary btn-sm"> <i class="ion-social-whatsapp"></i> 8000 555-44-65 </a>
              <hr class="offset-md visible-xs">
            </div>
            <hr class="offset-sm hidden-xs">

            <div class="comments white">
              <h2 class="h3">What do you think? (#3)</h2>
              <br>


              <div class="wrapper">
                <div class="content">
                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>


                  <h3>Chris Hemsworth</h3>
                  <label>Today</label>
                  <p>
                    Samsung's Galaxy S7 smartphone is getting serious hype. Here's what it does better than Apple's iPhone 6s.
                  </p>


                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>
                </div>
              </div>
              <hr class="offset-lg">
              <hr class="offset-md">

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
              <hr class="offset-md visible-xs">
            </div>            
          </div>
        </div>
      </div>
    </section>
    <hr class="offset-lg">


    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
      <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-produk.php") ?>

  </body>
</html>