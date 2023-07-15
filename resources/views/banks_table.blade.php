@extends('layout.layout')

@section('title')
    Редактор товаров
@endsection

@section('content')
    <main>

        <div align="center">
            <button type="button"
                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded"
                title="Добавить">
                <a href="/createBank">Добавить новый банк</a>
            </button>
        </div>

        <div class="py-4 pb-8 space-y-4">
            <table class="border border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Банк</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Первоначальный взнос, %</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Годовой процент, %</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Редактировать</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Удалить</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banks as $bank)
                        @include('blocks.bank_table_line', ['bank' => $bank])
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
