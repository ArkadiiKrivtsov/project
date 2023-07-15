<tr>
    <td class="border px-4 py-2">{{ $bank->name }}</td>
    <td class="border px-4 py-2">{{ $bank->first_payment }}₽</td>
    <td class="border px-4 py-2">{{ $bank->percent }} м²</td>
    <td class="border px-4 py-2">
        <a href="/updateBank/{{$bank->id}}" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    </td>
    <td class="border px-4 py-2">
        <a href="/deleteBank/{{$bank->id}}" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
    </td>
</tr>
