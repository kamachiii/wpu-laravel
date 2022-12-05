<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WPU Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }}" href="/blog">Blog</a>
        </div>
      </div>
    </div>
  </nav>
