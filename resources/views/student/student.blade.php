@extends('layouts.main')
@section('title', 'About')


@section('content')
<div class="container mt-5">
<div class="mt-5">
             <h2>Data Pelajar</h2>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Kelas</th>
                         <th scope="col">Jenis Kelamin</th>
                         <th scope="col">NIS</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($studentList as $student)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $student->name }}</td>
                             <td>{{ $student->classroom->name }}</td>
                             <td>{{ $student->gender }}</td>
                             <td>{{ $student->nis }}</td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
    </div>
</div>
@endsection