@extends('layout.layout')

    @section('title') Каталог @endsection

        @section('content')

        <div class="div-box mt mb">
            <div class="home-1-banner shortcode-single-product-wrap">
              <div class="container">
                <div class="home-1-banner-content">
                  <div class="row">
                      @foreach ($apartments as $apartment)
                          @include('blocks.home_block', ['apartment' => $apartment])
                      @endforeach
                </div>
              </div>
            </div>
        </div>

    @endsection
