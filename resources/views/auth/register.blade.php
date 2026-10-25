@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register</h2>

    @if ($errors->any())
        <div style="background:#ffebee;border:1px solid #ef9a9a;color:#b71c1c;padding:12px;border-radius:10px;margin-bottom:16px;">
            <ul style="margin-left:18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn">Register</button>
    </form>
</div>
@endsection
