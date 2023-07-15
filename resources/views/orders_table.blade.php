@extends('layout.layout')

@section('title')
    Актуальные заказы
@endsection

@section('content')
    <main>
        <h2> Актуальные заказы </h2>
        <div class="py-4 pb-8 space-y-4">
            <table class="border border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Имя покупателя</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Номер телефона</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Квартира</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Предпочитаемый банк для ипотеки</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Дата оформления заявки</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Закрыть сделку</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        @include('blocks.orders_table_line', ['order' => $order])
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
