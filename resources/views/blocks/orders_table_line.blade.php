<tr>
    <td class="border px-4 py-2">{{ $order->bayers_name }}</td>
    <td class="border px-4 py-2">+7{{ $order->phone }}</td>
    <td class="border px-4 py-2" width="100"><a href="/apartment/{{$order->apartment_id }}"><img src="{{ asset('assets/images/demo/' . $order->apartment->image_final_view) }}" alt="Изображение" class="img" ></td>
    <td class="border px-4 py-2">{{ $order->bank_id }}</td>
    <td class="border px-4 py-2">{{ $order->created_at }}</td>
    <td class="border px-4 py-2">
        <a href="/" class="inline-block bg-lime-700 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Удалить">
            <i class="fa fa-times" aria-hidden="true"></i>
        </a>
    </td>
</tr>
