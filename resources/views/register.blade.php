@extends('layout.layout')

@section('title')
    Регистрация нового сотрудника
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h2> Регистрация нового сотрудника </h2>

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
                <form method="post" action="/register">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите ФИО</label>
                            <input name="name" type="text" id="name" value="{{ old('name') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Иванов Иван Иванович">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите почту</label>
                            <input name="email" type="email" id="email" value="{{ old('email') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="mail@example.ru">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Придумайте пароль</label>
                            <input name="password" id="password" type="password"
                                class="mt-1 block w-full rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Повторите пароль</label>
                            <input name="password_confirmation" id="password_confirmation" type="password"
                                class="mt-1 block w-full rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="block">
                            <button type="submit"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Зарегистрировать
                            </button>
                            <button onclick="window.location.href = '/users';" type="reset"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Вернуться к списку
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
