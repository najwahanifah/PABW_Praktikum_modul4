<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8bbd0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #ec407a;
            color: white;
            padding: 18px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 1.4rem;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #f8bbd0;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .container {
            background-color: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 32px 28px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(25, 118, 210, 0.12);
            border: 2px solid #ec407a;
        }

        h2 {
            color: #ec407a;
            text-align: center;
            margin-bottom: 24px;
            font-size: 1.5rem;
        }

        footer {
            background-color: #ec407a;
            color: #ffffff;
            text-align: center;
            padding: 14px;
            font-size: 0.85rem;
        }

        /* Utility Form Styles */
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; color: #ec407a; font-weight: 600; font-size: 0.9rem; }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%; padding: 12px 14px; border: 1.5px solid #f8bbd0;
            border-radius: 10px; font-size: 0.95rem; outline: none; background-color: #f7faff;
        }
        input:focus { border-color: #ec407a; background-color: #fff; }
        .btn {
            display: block; width: 100%; padding: 12px; background-color: #ec407a; color: white;
            text-align: center; border: none; border-radius: 10px; font-size: 1rem; font-weight: 600;
            cursor: pointer; text-decoration: none; transition: background-color 0.2s;
        }
        .btn:hover { background-color: #ec407a; }

        /* Badge Status */
        .status-badge {
            padding: 4px 10px; border-radius: 6px; font-size: 0.85rem; font-weight: bold; color: white;
        }
        .waspada { background-color: #fbc02d; color: #333; } /* Yellow */
        .siaga { background-color: #f57c00; } /* Orange */
        .awas { background-color: #d32f2f; } /* Red */
    </style>
</head>
<body>

    <header>
        <h1>LaporBanjir</h1>
        <nav>
            @auth
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
                <a href="{{ route('profile') }}">Profil Petugas</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:none;border:none;color:#fff;font-weight:600;cursor:pointer;padding:0;">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung. All Rights Reserved.
    </footer>

</body>
</html>