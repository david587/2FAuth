<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    @auth
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-light">Logout</button>
      </form>
    @else
      @if(request()->is('2faLogin'))
        <p class="text-light text fs-5">Please login with your credentials <span class="text-warning">:)</span> </p>
        <a href="/">
          <button type="submit" class="btn btn-light">Normal Login</button>
        </a>
      @elseif(request()->is('/'))
      <p class="text-light text fs-5">Please login with your credentials <span class="text-warning">:)</span> </p>
        <a href="/2faLogin">
          <button type="submit" class="btn btn-light">Try 2FA</button>
        </a>
      @endif
    @endauth
  </div>
</div>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid d-flex justify-content-between">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @auth
      <div class="text-center">
        <a class="text-white" href="{{ route('list') }}">Home</a>
      </div>
      <div></div> <!-- spacing -->
    @endauth
  </div>
</nav>
