@extends('layouts.main')
@section('title', 'Student')


@section('content')
<div class="container mt-5">
    
<div class="mt-5">
             <h2 class="text-center">Data Pelajar</h2>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal" style="margin-left: 50px; margin-bottom:-50px">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambah data -->
                    <form>
                        <div class="mb-3">
                            <label for="dataField" class="form-label">Data</label>
                            <input type="text" class="form-control" id="dataField" placeholder="Masukkan data baru">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
</div>
             <table class="table table-hover table-bordered mt-5" style="width: 1200px; margin:auto">
    <thead class="table-success">
        <tr class="text-center">
            <th style="width: 50px " scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">NIS</th>
            <th scope="col">Action</th>
            {{-- <th scope="col">Ekstrakurikuler</th>
            <th scope="col">Wali Kelas</th> --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($studentList as $student)
            
        <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->classroom->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->nis }}</td>
               <td><a href="student-detail/{{ $student->id }}" style="text-decoration: none;">Detail</a></td>

                 {{-- <td>
                     @forelse ($student->extracurriculars as $extracurricular)
                        {{ $extracurricular->name }}
                        @empty
                        Tidak mengikuti Ekstrakurikuler
                        @endforelse
        </td>
                <td>{{ $student->classroom->teacher->name }}</td> --}}
            </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data Pelajar</td>
                </tr>
            @endforelse 
        </tbody>
    </table>
    
</div>
</div>
</div>
@endsection