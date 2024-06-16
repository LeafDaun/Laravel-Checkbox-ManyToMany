<x-layout>
    <x-slot:judul>Tambah Mata Kuliah</x-slot:judul>
    <x-slot:title>Add Kuliah</x-slot:title>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="mahasiswa_id" value="{{ $mahasiswa->id }}">
            <label for=""><h3>Nama : {{ $mahasiswa->nama }}</h3></label><br> 
            <label for=""><p>Alamat : {{ $mahasiswa->alamat }}</p></label><br>
            <label for=""><p>Jurusan : {{ $mahasiswa->jurusan->nama_jurusan }}</p></label>
             <hr>
        </div>

        <div class="mb-3">
            @foreach($kuliah as $matkul)
            <label>
                <input class="form-check-input" type="checkbox" name="matkul[]" value="{{ $matkul->id }}"
                       {{ $matkul->mahasiswa->contains($mahasiswa->id) ? 'checked' : '' }}>
                {{ $matkul->nama_kuliah }}
            </label><br/>
        @endforeach
        <hr>
        </div>
      
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
        


</x-layout>