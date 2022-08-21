<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
    <div class="container">
        <a class="navbar-brand {{ ($title === "About") ? 'active' : '' }}" href="/">RumahJakarta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" href="/posts">All Posts</a>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Dijual") ? 'active' : '' }}" aria-current="page" href="/categories/dijual">Dijual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Disewa") ? 'active' : '' }}" aria-current="page" href="/categories/disewa">Disewa</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ ($title === "KPR") ? 'active' : '' }}" aria-current="page" href="/kpr">KPR</a>
                    </li> --}}
                </li>
                
            </ul>
        </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                {{-- <li><a class="dropdown-item" href="/dashboard/posts">My Posts</a></li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        


    </div>
</nav>



      