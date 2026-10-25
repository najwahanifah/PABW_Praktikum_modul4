@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Petugas</h2>

    <div class="form-group">
        <label>Nama</label>
        <p>{{ Auth::user()->name }}</p>
    </div>

    <div class="form-group">
        <label>Email</label>
        <p>{{ Auth::user()->email }}</p>
    </div>

    <div class="form-group">
        <label>Terdaftar sejak</label>
        <p>{{ Auth::user()->created_at->translatedFormat('d F Y') }}</p>
    </div>
</div>
@endsection