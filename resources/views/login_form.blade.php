@extends('layout.layout')

@section('title')
    Авторизация
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h2> Войти </h2>

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
                <form method="post" action="/login">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите логин</label>
                            <input name="email" type="email" id="email" value="{{ old('email') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="mail@example.ru">
                        </div>

                        <div class="block">
                            <label for="field1" class="py-4 text-gray-700 font-bold">Введите пароль</label>
                            <input name="password" id="password" type="password" value="{{ old('password') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="block">
                            <button type="submit"
                                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Войти
                            </button>
                            @auth
                                <button onclick="window.location.href = '/register';" type="reset"
                                    class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Регистрация
                                </button>
                            @endauth
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
