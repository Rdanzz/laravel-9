@extends('layouts.main')
@section('title', 'Home')
    
@section('content')
<div class="container mt-5">
        <p>Anda berada di halaman home Laravel.</p>
         {{-- @if ($role == 'admin')
             <a href="#">lanjut ke halaman admin</a>
         @elseif ($role == 'staff')
            <a href="#">lanjut ke halaman staff</a>
        @else
        <a href="#">lanjut ke halaman user</a>
         @endif --}}

         <div class="mt-5">
             <h2>Data User</h2>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Email</th>
                         <th scope="col">Role</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $user)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $user['name'] }}</td>
                             <td>{{ $user['email'] }}</td>
                             <td>{{ $user['role'] }}</td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
    </div>
</div>
@endsection
