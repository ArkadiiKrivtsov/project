@extends('layout.layout')

    @section('title') Изменить банк @endsection

        @section('content')

        <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
            <div class="py-4 pb-8">
                <h2> Укажите новые данные банка </h2>
                
                    <div class="mt-8 max-w-md">
                        <form method="post" action="/updateBank/{{$bank->id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('PUT')

                            <div class="grid grid-cols-1 gap-6">
                                
                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Название</label>
                                <input name="name" type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{$bank->name}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Первоначальный взнос, %</label>
                                <input name="first_payment" type="number" id="first_payment" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{$bank->first_payment}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Годовой процент, %</label>
                                <input name="percent" id="percent" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{$bank->percent}}">
                            </div>
    
                            <div class="block">
                                <button type="submit" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Сохранить изменения
                                </button>
                                <button onclick="window.location.href = '/banks';" type="reset" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Отменить
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
            </div>
        </main>

    @endsection
