@extends('layouts.main')
@section('title', 'Student')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Pelajar</h2>
             <table class="table table-hover table-bordered mt-5" style="width: 1000px; margin:auto">
    <thead class="table-success">
        <tr class="text-center">
            <th style="width: 50px " scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">NIS</th>
            <th scope="col">Ekstrakurikuler</th>
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
                 <td>
                     @forelse ($student->extracurriculars as $extracurricular)
                        {{ $extracurricular->name }}
                        @empty
                        Tidak mengikuti Ekstrakurikuler
                        @endforelse
        </td>
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