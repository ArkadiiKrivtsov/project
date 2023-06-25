@extends('layout.layout')

    @section('title') Административный раздел @endsection

        @section('content')

        <main>
            <div class="py-4 pb-8 space-y-4">    
                <table class="border border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Карточка</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">id</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Адрес квартиры</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Цена</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Площадь</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Этаж</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Кол-во комнат</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apartments as $apartment)
                            @include('blocks.admin_section_table_line', ['apartment' => $apartment])
                        @endforeach
                    </tbody>
                </table>
    
            </div>
        </main>

    @endsection