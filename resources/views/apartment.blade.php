@include('layout.header')

      <div class="slider middle">
        <div class="slides">
           <input type="radio" name="r" id="r1" checked>
           <input type="radio" name="r" id="r2">
           <div class="slide s1">
              <img src="{{ asset('assets/images/demo/product-1.jpg') }}" alt="Изображение" class="img">
           </div>
           <div class="slide">
              <img src="{{ asset('assets/images/demo/product-1-2.jpg') }}" alt="Изображение" class="img">
           </div>
        </div>
        <div class="navigation">
           <label for="r1" class="bar"></label>
           <label for="r2" class="bar"></label>
        </div>
     </div>

    <button type="button" class="inline-block bg-red-600 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
      Купить
    </button>
    
    <button type="button" class="inline-block bg-red-600 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
      Оформить ипотеку
    </button>

    <div class="apartment_discribe">
        <h>
            <p style="text-indent: 25px;">Отличная трехкомнатная квартира в современном монолитном доме, квартира расположена в корпусе В, который максимально удален от проспекта, очень тихо, функциональная планировка, квартира на 3 стороны света, 5 окон, легко переделать в 4-х комнатную квартиру, в доме двухуровневый подземный паркинг, охраняемая закрытая территория с детскими и спортивными площадками, видеонаблюдение, шлагбаум, рядом с домом отличные школы с высоким рейтингом, спорткомплекс с бассейном, битцевский лесопарк, пруды, квартира в собственности, без обременений, свободная продажа.</p>
        </h>
        <p>Цена: 9 900 000 RUB</p>
        <p>Площадь: 102 кв.м</p> 
        <p>Этаж: 3</p>  
    </div>
     
@include('layout.footer')