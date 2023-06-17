   <!-- MENU -->
   <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> Ajisaka Siddiq</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    {{-- <a href="{{ route('home') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : ''}}">Home</a> --}}
                    <a href="{{ route('home') }}" class="nav-link"><span data-hover="Home">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('projects') }}" class="nav-link"><span data-hover="Projects">Projects</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link"><span data-hover="Blog">Blog</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bootcamp') }}" class="nav-link"><span data-hover="Ngoding">Ngoding</span></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-lg-auto">
                <div class="ml-lg-4">
                  <div class="color-mode d-lg-flex justify-content-center align-items-center">
                    <i class="color-mode-icon"></i>
                    Color mode
                  </div>
                </div>
            </ul>
        </div>
    </div>
</nav>