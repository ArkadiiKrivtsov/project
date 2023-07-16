@extends('layout.layout')

@section('title')
    Список квартир
@endsection

@section('content')
    <main>

        <div align="center">
            <button type="button"
                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded"
                title="Добавить">
                <a href="/create">Добавить новую квартиру</a>
            </button>
        </div>

        <div class="py-4 pb-8 space-y-4">
            <table class="border border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Карточка</th>
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
                        @include('blocks.product_editor_table_line', ['apartment' => $apartment])
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
