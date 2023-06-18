@include('layout.header')

      <div id="example-wrapper">
        <div class="div-box">
          <div class="slider-home slider-home-1">
            <div data-number="1" data-margin="0" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
              <div class="slider-1">
                <div class="slider-content slider-1-content">
                  <h2>Купи</h2>
                  <h6>дом</h6>
                  <p><a href="/apartment" class="btn btn-1">Открыть каталог</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- три блока с квартирами --}}
        <div class="div-box mt mb">
          <div class="home-1-banner shortcode-single-product-wrap">
            <div class="container">
              <div class="home-1-banner-content">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-1.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="nxt_b"></div>
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">15 000 000.00<span class="fa fa-rub"></span></span></span><a href="apartment.html">
                              <h3>51,19 м²</h3>
                              <h3>3/13 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-2.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">11 500 000.00<span class="fa fa-rub"></span></span></span><a href="apartment.html">
                              <h3>63,78 м²</h3>
                              <h3>6/17 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="product-item-wrap product-style_1">
                      <div class="product-item-inner">
                        <div class="product-thumb">
                          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/product-3.jpg') }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment" class="product-link">
                            <div class="product-hover-sign">
                              <hr/>
                              <hr/>
                            </div></a>
                          <div class="product-info">
                            <span class="price">7 900 000.00<span class="fa fa-rub"></span></span></span><a href="/apartment">
                              <h3>102 м²</h3>
                              <h3>2/4 эт.</h3>
                            </a>
                          </div>
                          <div class="product-actions">
                            <a href="/apartment" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

@include('layout.footer')