<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">LIBRARY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "TOP-BOOKS") ? 'active fw-bold' : '' }}" aria-current="page" href="/">TOP BOOKS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "AUTHOR") ? 'active fw-bold' : '' }}" aria-current="page" href="/author">AUTHOR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "NEW RELEASE") ? 'active fw-bold' : '' }}" aria-current="page" href="/new-book">NEW RELEASE BOOK</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>