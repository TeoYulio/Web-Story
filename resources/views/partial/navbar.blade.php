<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand{{ $active === 'post' ? 'active' : ' ' }}" href=" /post">Cerita Yuk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : ' ' }}" href=" /home">
                            <i class="bi bi-house-door-fill "></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'about' ? 'active' : ' ' }}" href=" /about">
                            <i class="bi bi-bookmarks-fill"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'post' ? 'active' : ' ' }}" href=" /post"> <i
                                class="bi bi-newspaper"></i>Post</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'categories' ? 'active' : ' ' }}" href=" /categories"> <i
                                class="bi bi-view-stacked"></i>Categories</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome Back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-layout-text-window"></i>Dashboard</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Log
                                            out</button>
                                    </form>
                                </li>
                        </li>
                    </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login"
                            class="nav-link {{ $active === 'login' ? 'active' : ' ' }}
                            "><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
    </nav>
