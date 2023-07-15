@extends('layout.layout')

@section('title')
    Добавление нового банка
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h2> Добавление нового банка </h2>

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
                <form method="post" action="/createBank">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите название банка</label>
                            <input name="name" type="text" id="name" value="{{ old('name') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Привер: ООО 'ВТБ'">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Укажите первоначальный взнос, %</label>
                            <input name="first_payment" type="number" id="first_payment" value="{{ old('first_payment') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="5">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Укажите годовой процент, %</label>
                            <input name="percent" id="percent" type="number" value="{{ old('percent') }}" placeholder="5"
                                class="mt-1 block w-full rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="block">
                            <button type="submit"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Сохранить и добавить
                            </button>
                            <button onclick="window.location.href = '/banks';" type="reset"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Отмена
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
