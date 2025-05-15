@foreach ($KesiapanTeknologis as $KesiapanTeknologi)
<tr>
    <td class="text-center" data-label='No'>{{ $loop->iteration }}</td>
    <td>{{ $KesiapanTeknologi->produk_inovasi }}</td>
    <td class="text-center">{{ $KesiapanTeknologi->deskripsi}}</td>
    <td class="text-center">{{ $KesiapanTeknologi->nilai_tkt}}</td>
    <td class="text-center">{{ $KesiapanTeknologi->tanggal }}</td>
    <td class="text-center"><a href="{{ $KesiapanTeknologi->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
</tr>
@endforeach
