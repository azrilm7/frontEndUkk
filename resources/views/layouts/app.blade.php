<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'ToDo App')</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;

    }

    .full-wrapper {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      background-color: #3674B5;
      border-radius: 10px;
      padding: 15px;
      margin: 6px;
      width: 220px;
      min-height: calc(100vh - 12px);
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      padding: 8px;
      border-radius: 10px;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #155E95;
    }
    .sidebar a.active {
      background-color: #155E95;
      transform: scale(0.97);
      transition: transform 0.1s ease;
    }

    .sidebar-icon {
      width: 25px;
      height: 25px;
      background-color: #6c757d;
      border-radius: 6px;
      margin-right: 10px;
    }

    .main-content {
      flex: 1;
      margin: 6px;
    }
    

    .bg-purple {
      background-color: #6f42c1 !important;
      color: white !important;
    }
    .bg-navy {
      background-color: #003092 !important;
      color: white !important;
    }
    .bg-teal {
      background-color: #00879E !important;
      color: white !important;
    }
    .bg-orange {
      background-color: #FFAB5B !important;e !important;
    }
    .bg-cream {
      background-color: #FFF2DB !important;
      
    }

    .bg-green{
      background-color: #5D8736 !important;
      color: white !important;
    }

    .bg-sage {
      background-color: #809D3C !important;
      color: white !important;
    }
    .bg-high {
      background-color: #D91656 !important;
      color: white !important;
    }
    .bg-med {
      background-color: #EB5B00 !important;
      color: white !important;
    }
    .bg-low {
      background-color: #FFB200 !important;
      color: white !important;
    }

    .text-orange {
      color: #fd7e14 !important;
    }

  </style>
</head>
<body>

  <div class="full-wrapper">
    {{-- Include Sidebar --}}
    @include('partials.sidebar')

    {{-- Konten halaman --}}
    <div class="main-content">
      @yield('content')
    </div>
  </div>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  @include('sweetalert::alert')

</body>
</html>
