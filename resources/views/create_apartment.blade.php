@extends('layout.layout')

    @section('title') Добавить новую квартиру @endsection

        @section('content')

        <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
            <div class="py-4 pb-8">
                <h2> Мастер добавления новой квартиры </h2>
                
                <form action="/create" method="post">
                    <div class="mt-8 max-w-md">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Введите адресс</label>
                                <input id="address" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="пример: ул.Еленый Колесовой д. 53">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите стоимость</label>
                                <input id="price" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите кол-во комнат</label>
                                <input id="rooms" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите площадь (м²)</label>
                                <input id="square" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                            </div>

                            <div class="block">
                                <label for="field1" class="py-4 text-gray-700 font-bold">Укажите этаж</label>
                                <input id="floor" type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                            </div>

                            <div class="block">
                                <label for="field_file" class="py-4 text-gray-700 font-bold">Загрузите фото квартиры (375х450)</label>
                                <input id="image_final_view" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-300 focus:outline-none">
                            </div>

                            <div class="block">
                                <label for="field_file" class="py-4 text-gray-700 font-bold">Загрузите изображение плана квартиры (375х450)</label>
                                <input id="image_plan" type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-300 focus:outline-none">
                            </div>

                            <div class="block">
                                <label for="field6" class="py-4 text-gray-700">Добавить описание (не более 255 символов)</label>
                                <textarea id="description" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3"></textarea>
                            </div>
    
                            <div class="block">
                                <button type="submit" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Сохранить
                                </button>
                                <button type="reset" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Отменить
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

    @endsection
