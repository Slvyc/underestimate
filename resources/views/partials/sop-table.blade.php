@foreach ($Sops as $Sop)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $Sop->nama_file }}</td>
        <td class="text-center">{{ $Sop->date }}</td>
        <td class="text-center"><a href="{{ $Sop->link }}" target='_blank'
                class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
    </tr>
@endforeach