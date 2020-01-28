<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between bg-dark">
  <a class="navbar navbar-expand-lg" href="{{ route('home') }}">
    <strong>Home</strong>
  </a>
  @auth
    <a href="{{ route('login') }}" class="text-danger">
      <strong>Logout</strong>
    </a>
  @endauth
  @guest
    <a href="{{ route('logout') }}" class="text-danger">
      <strong>Login</strong>
    </a>
  @endguest
</nav>