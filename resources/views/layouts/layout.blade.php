<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webarchi</title>

    {{-- <!-- Fonts --> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    {{-- <!-- JQuery  --> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <!-- Bootstrap  --> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- <!-- CSS  --> --}}
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left-side">
            <a href="/" id="W-main">webarchi</a>
        </div>
        @if ($_SERVER['REQUEST_URI'] == '/')
            <div class="navbar-right-side">
                <div class="links">
                    <a href="#section-services">Paslaugos</a>
                    <a href="#section-projects">Projektai</a>                  
                    <a href="#section-contacts">Kontaktai</a>
                </div>
            <div class="menu-btn">
                <div class="menu-btn__x"></div>
            </div>
        </div>
        @endif
        
    </div>
        {{-- Navbar --}}
        
        {{-- Navbar end --}}
            {{-- content --}}
                
            @yield('content')
            <footer>
                <div class="footer-details">
                    <div class="logo details-colums">

                    </div>
                    <div class="details-colums">
                        <p class="mb-0">
                        <a href="#section-services" class="text-reset">Paslaugos</a>
                        </p>
                        <p class="mb-0">
                        <a href="#section-projects" class="text-reset">Projektai</a> 
                        </p>
                        <p class="mb-0">
                        <a href="#" id="ppBtn2" class="text-reset">Privatumo politika</a>
                        </p>
                    </div>
                    <div class="details-colums">
                        <!-- Links -->
                            <p class="mb-0">
                                Įmonės kodas : ***********
                            </p>
                            <p class="mb-0">
                                Aukštaičių g. 4B
                            </p>
                        </div>
    
                        <!-- Grid column -->
                        <div class="details-colums">
                        <p><i class="fas fa-envelope me-3 pr-2"></i>info@webarchi.lt</p>
    
                        <p><i class="fas fa-phone me-3 pr-2"></i>+370(695)30350</p>
                        </div>
            
            <!-- Grid column -->
                        
                </div>
                <!-- Grid row -->
                    <!-- Grid column -->
                        
            <!-- Grid row -->
                {{-- Copyright --}}
            <div class="copyright" >
                <p><span style="font-family:Roboto">&copy; @php echo date('Y') @endphp Copyright: Webarchi</span>
            </div>
            </footer>
            <script type="text/javascript" src="/js/script.js"></script>
            
    @if ($_SERVER['REQUEST_URI'] == '/')
            <script type="text/javascript" src="/js/particles.js"></script>
            <script>
                    let width = window.innerWidth;
                    if(width<= 430) particlesJS.load('particles-js', '/js/particles2.json', function() {});
                    else particlesJS.load('particles-js', '/js/particles.json', function() {});
            </script>
    @endif
</body>
</html>