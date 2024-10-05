@extends('layouts.main')
@section('title', 'Teacher')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Guru</h2>
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal" style="margin-left: 150px; margin-bottom:-50px">
            Tambah Data
        </button>

        @extends('layouts.modal')
    @section('modal')
         <!-- Form untuk menambah data -->
                <form action="{{ route('teacher.store') }}" method="POST" id="addDataForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Guru</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama guru" required>
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
            <th scope="col">Nama</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($teachers as $teacher)
            
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $teacher->name }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Belum ada data Guru</td>
                </tr>
            @endforelse
    </tbody>
</table>

         </div>
    </div>
</div>
@endsection