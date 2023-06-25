<tr>
    <td class="border px-4 py-2"><a href="/apartment/{{$apartment->id}}"><img src="{{ asset('assets/images/demo/' . $apartment->image_final_view) }}" alt="Изображение" class="img"></td>
    <td class="border px-4 py-2">{{ $apartment->id }}</td>
    <td class="border px-4 py-2">{{ $apartment->address }}</td>
    <td class="border px-4 py-2">{{ $apartment->price }}₽</td>
    <td class="border px-4 py-2">{{ $apartment->square }} м²</td>
    <td class="border px-4 py-2">{{ $apartment->floor }}</td>
    <td class="border px-4 py-2">{{ $apartment->rooms }}</td>
    <td class="border px-4 py-2">
        <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    </td>
    <td class="border px-4 py-2">
        <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
    </td>
</tr>
