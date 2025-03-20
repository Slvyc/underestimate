@foreach ($SopPanduans as $SopPanduan)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $SopPanduan->nama_file }}</td>
        <td class="text-center">{{ $SopPanduan->date }}</td>
        <td class="text-center"><a href="{{ $SopPanduan->link }}" target='_blank'
                class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
    </tr>
@endforeach