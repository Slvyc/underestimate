@foreach ( $KegiatanAkademiks as $KegiatanAkademik )
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $KegiatanAkademik->nama_kegiatan }}</td>
        <td class="text-center">{{ $KegiatanAkademik->tanggal_pelaksanaan }}</td>
        <td class="text-center"><a href="{{ $KegiatanAkademik->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
    </tr>         
@endforeach