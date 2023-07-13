@extends('layout.layout')

@section('title')
    Оформление заказа
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h2> Оформить заказ </h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mt-8 max-w-md">
                <form method="post" action="/buy">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите Имя</label>
                            <input name="name" type="text" id="name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Санек">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите телефон</label>
                            <input name="phone" id="phone" type="phone"
                                class="mt-1 block w-full rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="block">
                            <button type="submit"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                ОФОРМИТЬ ЗАКАЗ
                            </button>
                            <button onclick="window.location.href = '/catalog';" type="reset"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                В каталог
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
