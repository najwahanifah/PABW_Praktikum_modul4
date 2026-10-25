@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Login</h2>

    @if ($errors->any())
        <div style="background:#ffebee;border:1px solid #ef9a9a;color:#b71c1c;padding:12px;border-radius:10px;margin-bottom:16px;">
            <ul style="margin-left:18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div class="form-group" style="display:flex;align-items:center;gap:8px;">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember" style="margin:0;">Ingat saya</label>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>
</div>
@endsection
