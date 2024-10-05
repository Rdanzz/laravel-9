@extends('layouts.main')
@section('title', 'Student')


@section('content')
<div class="container mt-5">
    <div class="mt-5">
                 <h2 class="text-center">Data Pelajar</h2>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal" style="margin-left: 50px; margin-bottom:-50px">
            Tambah Data
        </button>
        
    </div>

    @extends('layouts.modal')
    @section('modal')
         <!-- Form untuk menambah data -->
                <form action="{{ route('students.store') }}" method="POST" id="addDataForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama pelajar" required>
                    </div>

                    <div class="mb-3">
                        <label for="classroom_id" class="form-label">Kelas</label>
                        <select class="form-select" id="classroom_id" name="classroom_id" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            @foreach ($classrooms as $classroom)
                                <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" disabled selected>Pilih jenis kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
    @endsection
    
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