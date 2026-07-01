            
            

            <!DOCTYPE html>
            <html lang="km">

            <head>
                
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>@yield('title', 'Hello | MyWebApp')</title>

                {{-- Fonts & Bootstrap Icons --}}
                <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

                <!-- Bootstrap 5.3.3 CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- Bootstrap Icons -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                @stack('styles')

            </head>

            <body>
                @include('components.navbar')

                <main class="container py-4">
                    @yield('content')
                </main>
            </body>
            </html>