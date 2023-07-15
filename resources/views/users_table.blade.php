@extends('layout.layout')

@section('title')
Список сотрудников
@endsection

@section('content')
    <main>
        
        <div align="center">
            <button type="button"
                class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded"
                title="Добавить">
                <a href="/register">Добавить нового сотрудника</a>
            </button>
        </div>

        <h2> Список сотрудников </h2>
        <div class="py-4 pb-8 space-y-4">
            <table class="border border-collapse w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Имя</th>
                        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Почта</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @include('blocks.user_table_line', ['user' => $user])
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
