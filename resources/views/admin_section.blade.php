@extends('layout.layout')

    @section('title') Административный раздел @endsection

        @section('content')

        <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
            <div class="py-4 pb-8 space-y-4">    
                <table class="border border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">id</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Адрес квартиры</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Цена</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Площадь</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Этаж</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Кол-ва комнат</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Урицкого</td>
                            <td class="border px-4 py-2">1 394 901 ₽</td>
                            <td class="border px-4 py-2">102</td>
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Урицкого</td>
                            <td class="border px-4 py-2">1 394 901 ₽</td>
                            <td class="border px-4 py-2">102</td>
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Урицкого</td>
                            <td class="border px-4 py-2">1 394 901 ₽</td>
                            <td class="border px-4 py-2">102</td>
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
        </main>

    @endsection