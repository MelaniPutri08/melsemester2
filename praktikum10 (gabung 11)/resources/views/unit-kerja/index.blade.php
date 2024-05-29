<!-- resources/views/unit-kerja/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Unit Kerja</h1>
    <ul>
        @foreach ($list_unit_kerja as $unit_kerja)
            <li>{{ $unit_kerja->nama }}</li>
        @endforeach
    </ul>
@endsection
