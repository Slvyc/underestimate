@foreach ($DokumenAmis as $DokumenAmi)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td class="text-center">{{ $DokumenAmi->nama_dokumen }}</td>        
        <td class="text-center"><a href="{{ $DokumenAmi->link }}" target='_blank'
            class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a>
        </td>
    </tr>
@endforeach