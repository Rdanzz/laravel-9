@extends('layouts.main')
@section('title', 'Classroom Detail')


@section('content')
<div class="container mt-5">
    <div class="bg-warning rounded-pill" style="width:35px; height:35px">
        <a href="{{ route('class') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="30" stroke="currentColor" class="size-6" style="padding-left:5px; padding-top:5px; color:black!important">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
    </svg>
        </a>

    </div>
<div class="mt-5">
             <h2 class="text-center">Data Kelas {{ $class->name }}</h2>
             <table class="table table-hover table-bordered mt-5" style="width: 1000px; margin:auto">
    <thead class="table-success">
        <tr class="text-center">
            <th scope="col">Pelajar</th>
            <th scope="col">Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
            
            <tr>
                <td>
                    <ol>
                     @forelse ($class->students as $student)
                        <li>{{ $student->name }}</li>
                        @empty
                        Tidak ada siswa
                        @endforelse
                    </ol>
                </td>
                @if ($class->teacher == true)
                    <td>{{ $class->teacher->name }}</td>
                @else
                    <td>Tidak ada wali kelas</td>
                @endif
            </tr>
    </tbody>
</table>

         </div>
    </div>
</div>
@endsection