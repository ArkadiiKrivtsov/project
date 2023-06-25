@extends('layout.layout')

    @section('title') Главная @endsection

        @section('content')

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
                        @foreach ($apartments as $apartment)
                            @section('icon_new')
                            <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                            @endsection

                            @include('blocks.home_block', ['apartment' => $apartment])

                        @endforeach
    
                  </div>
                </div>
              </div>
            </div>
        </div>

    @endsection

