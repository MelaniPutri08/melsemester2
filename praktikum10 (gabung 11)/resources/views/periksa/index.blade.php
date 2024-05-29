<!-- resources/views/periksa/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Periksa</h1>
    <ul>
        @foreach ($periksas as $periksa)
            <li>{{ $periksa->nama_pasien }} - {{ $periksa->tanggal_periksa }} - {{ $periksa->hasil_periksa }}</li>
        @endforeach
    </ul>
@endsection
