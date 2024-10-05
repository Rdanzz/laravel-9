@extends('layouts.main')
@section('title', 'Classroom')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2 class="text-center">Data Kelas</h2>
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