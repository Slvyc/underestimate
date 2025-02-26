@foreach ( $PenghargaanMahasiswas as $PenghargaanMahasiswa )   
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            <div class="profile-container">
                <img src="{{ asset('storage/' . $PenghargaanMahasiswa->gambar_person) }}" alt="Mahasiswa Image" class="profile-image">
                <div class="profile-name">{{ $PenghargaanMahasiswa->person }}</div>
            </div>
        </td>
        <td>
            <a href="{{ $PenghargaanMahasiswa->link }}">{{ $PenghargaanMahasiswa->prestasi }}</a>
        </td>
        <td>{{ $PenghargaanMahasiswa->tingkat }}</td>
        <td>{{ $PenghargaanMahasiswa->tahun }}</td>
    </tr>
@endforeach