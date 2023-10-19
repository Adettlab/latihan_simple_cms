<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="/dasboard"><i class="fa-solid fa-house"></i> <b>HOME</b></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" style="font-size: 20px;">
                <i class="nav-icon fas fa-user" style="color: red"></i> {{ auth()->user()->email }} </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="dropdown-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button style="color: red" type="submit" class="dropdown-item"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
