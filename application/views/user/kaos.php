<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("user/_partials/head.php") ?>
  </head>
  <body>
    
    <?php $this->load->view("user/_partials/cart.php") ?>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    
    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbarcat.php") ?>
    </nav>
    <hr class="offset-top">


    <div class="tags">
      <div class="container">
          <div class="btn-group pull-right sorting">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ion-arrow-down-b"></i> Sorting by name
            </button>

            <ul class="dropdown-menu">
              <li class="active"><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
              <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
            </ul>
          </div>

          <p>Search by tags</p>
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default btn-sm active">
              <input type="radio" name="options" id="option1" checked> All products
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option2"> Desktops
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option3"> Laptops
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option4"> Tablets
            </label>
            <label class="btn btn-default btn-sm">
              <input type="radio" name="options" id="option5"> Hybrids
            </label>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-4 col-md-3">
          <hr class="offset-lg">

          <div class="filter">
            <div class="item">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Type</h1>
                </div>

                <div class="controls">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Desktops">Desktops</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Laptops">Laptops</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Tablets">Tablets</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Hybrid">Hybrids</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>

            <br>

            <div class="item">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Screen</h1>
                </div>

                <div class="controls grid">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="7 in">7 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="10 in">10 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="11 in">11 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="14 in">14 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="15 in">15 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="17 in">17 in</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>

            <br>

            <div class="item">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="#clear" data-action="clear-price"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Price</h1>
              </div>

              <div class="controls">
                  <br>
                  <div id="slider-price"></div>
                  <br>
                  <p id="amount"></p>
              </div>
            </div>
            <br>

            <div class="item lite">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Manufacturer</h1>
                </div>

                <div class="controls">
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="Hp">Hp</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="ASUS">ASUS</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Acer">Acer</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Dell">Dell</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Sony">Sony</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Apple">Apple</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Lenovo">Lenovo</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>

                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                       <div class="label" data-value="Microsoft">Microsoft</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-8 col-md-9">
          <hr class="offset-lg">

          <div class="products">
            <div class="row">


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/apple-imac-27-retina.jpg') ?>" alt="Apple iMac 27 Retina"/></a>

                  <div class="content">
                    <h1 class="h3">iMac 27 Retina</h1>
                    <p class="price">$2099.99</p>
                    <label>Desktop</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/microsoft-surface-studio.jpg') ?>" alt="Microsoft Surface Studio"/></a>

                  <div class="content">
                    <h1 class="h3">Surface Studio</h1>
                    <p class="price">$3749.99</p>
                    <label>Laptops</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/dell-inspiron-23.jpg') ?>" alt="Dell Inspion 23"/></a>

                  <div class="content">
                    <h1 class="h3">Dell Inspion 23</h1>
                    <p class="price">$1987.99</p>
                    <p class="price through">$2100.99</p>
                    <label>Laptops</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/ipad-air.jpg') ?>" alt="iPad Air"/></a>

                  <div class="content">
                    <h1 class="h4">iPad Air</h1>
                    <p class="price">$449.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/ipad-mini.jpg') ?>" alt="iPad Mini"/></a>

                  <div class="content">
                    <h1 class="h4">iPad Mini</h1>
                    <p class="price">$399.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/mi-pad-2.jpg') ?>" alt="Mi Pad 2/"></a>

                  <div class="content">
                    <h1 class="h4">Mi Pad 2</h1>
                    <p class="sale">$199.99</p>
                    <p class="price through">$249.99</p>
                    <label>Tablets</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/surface-pro.jpg') ?>" alt="Surface Pro"/></a>

                  <div class="content">
                    <h1 class="h4">Surface Pro</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/lenovo-yoga.jpg') ?>" alt="Lenovo Yoga"/></a>

                  <div class="content">
                    <h1 class="h4">Lenovo Yoga</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product hidden-sm">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="<?php echo base_url('assets/img/products/asus-transformer.jpg') ?>" alt="ASUS Transformer"/></a>

                  <div class="content">
                    <h1 class="h4">ASUS Transformer</h1>
                    <p class="price">$199.99</p>
                    <label>Hybrid</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>


   

    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
      <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/login.php") ?>

    <?php $this->load->view("user/_partials/regis.php") ?>

    <?php $this->load->view("user/_partials/forgotpass.php") ?>

    <!-- 
    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    -->

    <?php $this->load->view("user/_partials/js-utama.php") ?>

  </body>
</html>