@foreach ($Kerjasamas as $Kerjasama)
<tr>
    <td class="text-center" data-label='No'>{{ $loop->iteration }}</td>
    <td>{{ $Kerjasama->nama_kerjasama }}</td>
    <td class="text-center">{{ $Kerjasama->lingkup_kerjasama }}</td>
    <td class="text-center">{{ $Kerjasama->jenis_dokumen }}</td>
    <td class="text-center">{{ $Kerjasama->tanggal }}</td>
    <td class="text-center">{{ $Kerjasama->status_kerjasama }}</td>
    <td class="text-center"><a href="{{ $Kerjasama->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
</tr>
@endforeach
