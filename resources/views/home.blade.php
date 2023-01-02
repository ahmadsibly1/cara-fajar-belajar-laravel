@extends('layouts.main')

@section('title', 'Beranda')
@section('content')
    <h1>Selamat Datang {{ $nama }}, Role anda adalah {{ $role }}</h1>
    {{-- @if ($role == 'admin')
            <a href="">Ke halaman admin</a>
        @elseif ($role == 'staff')
            <a href="">Ke halaman Staff</a>
        @else
            <a href="">Ke halaman apapun</a>
        @endif --}}

    {{-- @switch($role)
            @case($role == 'admin')
                <a href="">Ke halaman admin</a>
            @break

            @case($role == 'staff')
                <a href="">Ke halaman Staff</a>
            @break

            @default
                <a href="">Ke halaman apapun</a>
        @endswitch --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buah as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
