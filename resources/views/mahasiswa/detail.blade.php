<x-layout>
    <x-slot:judul>Detail Mahasiswa</x-slot:judul>
    <x-slot:title>Detail</x-slot:title>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Mahasiswa</div>
                <div class="card-body">

                    <h4>Nama : {{ $mahasiswa->nama }}</h4>
                    <p><strong>Alamat</strong> : {{ $mahasiswa->alamat }}</p>
                    <h5>Jurusan : {{ $mahasiswa->jurusan->nama_jurusan }}</h5>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3 mb-5">
        <div class="card-header">Mata Kuliah</div>
        <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <th>No</th><th>Mata Kuliah</th>
                </tr>
                @foreach ($mahasiswa->matakuliah as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_kuliah }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

</x-layout>