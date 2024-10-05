@extends('layouts.main')
@section('title', 'Classroom')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Kelas</h2>
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal" style="margin-left: 150px; margin-bottom:-50px">
            Tambah Data
        </button>

        @extends('layouts.modal')
    @section('modal')
         <!-- Form untuk menambah data -->
                <form action="{{ route('class.store') }}" method="POST" id="addDataForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama kelas" required>
                    </div>

                    <div class="mb-3">
                        <label for="teacher_id" class="form-label">Wali Kelas</label>
                        <select class="form-select" id="teacher_id" name="teacher_id" required>
                            <option value="" disabled selected>Pilih Wali</option>
                            @foreach ($teacher as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
    @endsection

             <table class="table table-hover table-bordered mt-5" style="width: 1000px; margin:auto">
    <thead class="table-success">
        <tr class="text-center">
            <th style="width: 50px " scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
            {{-- <th scope="col">Pelajar</th>
            <th scope="col">Wali Kelas</th> --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($classList as $class)
            
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $class->name }}</td>
                <td><a href="class-detail/{{ $class->id }}" style="text-decoration: none">Detail</a></td>
                {{-- <td>
                    <ol>
                     @forelse ($class->students as $student)
                        <li>{{ $student->name }}</li>
                        @empty
                        Tidak ada siswa
                        @endforelse
                    </ol>
                </td>
                <td>{{ $class->teacher->name }}</td> --}}
            </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Belum ada data Kelas</td>
                </tr>
            @endforelse
    </tbody>
</table>

         </div>
    </div>
</div>
@endsection