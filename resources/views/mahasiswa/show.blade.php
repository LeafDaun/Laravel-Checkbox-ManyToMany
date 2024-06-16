<x-layout>
    <x-slot:judul>Tabel Mahasiswa</x-slot:judul>
    <x-slot:title>Mahasiswa</x-slot:title>

    <div class="mb-3">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>{{ $mhs->jurusan->nama_jurusan }}</td>
                <td>
                    
                    <a href="/mahasiswa/detail/{{ $mhs->id }}" class="btn btn-warning btn-sm">Detail</a>
                    <a href="/mahasiswa/create/{{ $mhs->id }}" class="btn btn-success btn-sm">Mata Kuliah</a>

                </td>
            </tr>
        @endforeach
    </table>

    {{ $mahasiswa->links('pagination::bootstrap-5') }}
</x-layout>