@foreach ($Surveys as $Survey)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td class="text-center">{{ $Survey->jenis_survey }}</td>
        <td class="text-center">
            <a href="{{ $Survey->link }}">Klik Disini</a>
        </td>          
    </tr>
@endforeach