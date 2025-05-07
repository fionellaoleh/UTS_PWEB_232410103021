<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Kerohanian Kristen UNEJ - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS with Pastel Yellow and Red -->
    <style>
        :root {
            --pastel-yellow: #ffec3e;
            --pastel-red: #fa6363;
            --pastel-yellow-dark: #f6d365;
            --pastel-red-dark: #f3a683;
            --text-dark: #2d3436;
            --gray-light: #d3d3d3;   /* abu muda */
            --gray-medium: #a9a9a9;  /* abu sedang */
            --gray-dark: #696969;    /* abu tua */
        }
        .page-header {
            background-image: url("{{ asset(path: 'asset/univ.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
            margin-bottom: 2rem;
            color: white;
            position: relative;
        }

        .page-header::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* dark overlay */
            z-index: 0;
        }

        .page-header .container {
            position: relative;
            z-index: 1;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff9f9;
            color: var(--text-dark);
        }
        
        .navbar {
            background-color: var(--pastel-yellow);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--text-dark);
        }
        
        .nav-link {
            color: var(--text-dark);
            font-weight: 500;
        }
        
        .nav-link:hover {
            color: var(--pastel-red-dark);
        }
        
        .btn-primary {
            background-color: var(--pastel-red);
            border-color: var(--pastel-red-dark);
            color: var(--text-dark);
        }
        
        .btn-primary:hover {
            background-color: var(--pastel-yellow);
            border-color: var(--pastel-yellow);
            color: white;
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: none;
            overflow: hidden;
        }
        
        .card-header {
            background-color: var(--gray-light);
            color: var(--text-dark);
            font-weight: 700;
        }
   
        
        .footer {
            background-color: var(--pastel-yellow);
            color: var(--text-dark);
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        
        
        .table-hover tbody tr:hover {
            background-color: var(--pastel-yellow);
        }
        
        /* Custom card styles for pengelolaan */
        .activity-card {
            border-left: 4px solid var(--pastel-yellow);
            transition: transform 0.3s;
        }
        
        .activity-card:hover {
            transform: translateY(-5px);
            border-left: 4px solid var(--pastel-red);
        }
        
        .member-card {
            border-top: 4px solid var(--pastel-red);
            transition: transform 0.3s;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
            border-top: 4px solid var(--pastel-yellow);
        }
    </style>
</head>
<body>

    <x-navbar />
    
    <div class="container-fluid p-0">
        @yield('content')
    </div>
    
    <x-footer />

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
