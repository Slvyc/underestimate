@foreach ( $PenghargaanDosens as $PenghargaanDosen )
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            <div class="profile-container">
                <img src="{{ asset('storage/' . $PenghargaanDosen->gambar_person) }}" alt="Dosen Image" class="profile-image">
                <div class="profile-name">{{ $PenghargaanDosen->person }}</div>
            </div>
        </td>
        <td>
            <a href="{{ $PenghargaanDosen->link }}">{{ $PenghargaanDosen->prestasi }}</a>
        </td>
        <td>{{ $PenghargaanDosen->tingkat }}</td>
        <td>{{ $PenghargaanDosen->tahun }}</td>
    </tr>
@endforeach

<!-- Tampilkan Pagination -->
