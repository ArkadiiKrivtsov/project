@extends('layout.layout')

    @section('title') Изменить квартиру @endsection

        @section('content')

        <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
            <div class="py-4 pb-8">
                <h2> Укажите новые данные квартиры </h2>
                
                    <div class="mt-8 max-w-md">
                        <form method="post" action="/update" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="grid grid-cols-1 gap-6">
    
                            <input type="hidden" name="id" value="{{$apartment->id}}">
                            
                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Введите новый адресс</label>
                                <input name="address" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{$apartment->address}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите новую стоимость</label>
                                <input name="price" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{$apartment->price}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите кол-во комнат</label>
                                <input name="rooms" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{$apartment->rooms}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите площадь (м²)</label>
                                <input name="square" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{$apartment->square}}">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите этаж</label>
                                <input name="floor" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{$apartment->floor}}">
                            </div>

                            <div class="block">
                                <label for="field_file" class="py-4 text-gray-700 font-bold">Загрузите фото квартиры (375х450)</label>
                                <input name="image_final_view" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-300 focus:outline-none">
                            </div>

                            <div class="block">
                                <label for="field_file" class="py-4 text-gray-700 font-bold">Загрузите изображение плана квартиры (375х450)</label>
                                <input name="image_plan" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-300 focus:outline-none">
                            </div>

                            <div class="block">
                                <label for="field6" class="py-4 text-gray-700">Добавить описание (не более 255 символов)</label>
                                <textarea name="description" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" placeholder="{{$apartment->description}}"></textarea>
                            </div>
    
                            <div class="block">
                                <button type="submit" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Сохранить изменения
                                </button>
                                <button onclick="window.location.href = '/admin_section';" type="reset" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Отменить
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
            </div>
        </main>

    @endsection
