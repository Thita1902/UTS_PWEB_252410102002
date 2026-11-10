@props(['username' => 'Pengguna'])

<nav class="navbar">

    <div class="nav-brand">
        Gabin Ice
    </div>

    <div class="nav-links">

        <a href="{{ route('dashboard', ['username' => $username]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => $username]) }}">
            Pengelolaan
        </a>

        <a href="{{ route('profile', ['username' => $username]) }}">
            Profile
        </a>

        <a href="{{ route('logout') }}" class="logout-link">
            Logout
        </a>

    </div>

</nav>