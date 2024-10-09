@extends('layouts.main')
@section('title', 'Ekstrakurikuler')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Ekstrakurikuler</h2>
        @if (session('success'))
             <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal" style="margin-left: 150px; margin-bottom:-50px">
            Tambah Data
        </button>

        @extends('layouts.modal')
    @section('modal')
         <!-- Form untuk menambah data -->
                <form action="{{ route('teacher.store') }}" method="POST" id="addDataForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Ekstrakurikuler</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama ekstrakurikuler" required>
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
            <th scope="col">Nama Ekstrakurikuler</th>
            <th scope="col">Anggota</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($eskulList as $eskul)
            
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $eskul->name }}</td>
                <td>
                    <ol>
                        @forelse ($eskul->students as $data)
                        <li>{{ $data->name }}</li>
                           @empty
                           Tidak memiliki anggota
                           @endforelse
                    </ol>
        </td>
            </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Belum ada data Ekstrakurikuler</td>
                </tr>
            @endforelse
    </tbody>
</table>

         </div>
    </div>
</div>
@endsection