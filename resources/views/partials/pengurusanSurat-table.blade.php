@foreach ($PengurusanSurats as $PengurusanSurat)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $PengurusanSurat->pengurusan_surat }}</td>
        <td class="text-center"><a href="{{ $PengurusanSurat->link }}" target='_blank'
                class='btn-primary btn-sm text-decoration-underline'>Ajukan Disini</a></td>
    </tr>
@endforeach