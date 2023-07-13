@extends('layout.layout')

   @section('title') Обзор квартиры @endsection

      @section('content')
      
      <div class="slider middle">
         <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <div class="slide s1">
               <img src="{{ asset('assets/images/demo/' . $apartment->image_final_view) }}" alt="Изображение" class="img">
            </div>
            <div class="slide">
               <img src="{{ asset('assets/images/demo/' . $apartment->image_plan) }}" alt="Изображение" class="img">
            </div>
         </div>
         <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
         </div>
      </div>
     
      <button onclick="window.location.href = '/buy';" type="button" class="inline-block bg-red-600 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
       Купить
      </button>

      <button type="button" class="inline-block bg-red-600 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
       Оформить ипотеку
      </button>
 
      <div class="apartment_discribe">
         <h>
             <p style="text-indent: 25px;"><?=htmlspecialchars($apartment->description)?></p>
         </h>
         <p>Цена: <?=htmlspecialchars($apartment->price)?> RUB</p>
         <p>Площадь: <?=htmlspecialchars($apartment->square)?> м²</p> 
         <p>Этаж: <?=htmlspecialchars($apartment->floor)?></p>  
      </div>

   @endsection