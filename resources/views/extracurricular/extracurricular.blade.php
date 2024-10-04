@extends('layouts.main')
@section('title', 'Ekstrakurikuler')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Ekstrakurikuler</h2>
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