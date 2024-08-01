<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand me-5 fw-bold h-font" href="index.php">TJ HOTEL</a>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item me-2" href="#">Action</a></li>
                      <li><a class="dropdown-item me-2" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider me-2"></li>
                      <li><a class="dropdown-item me-2" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <div class="d-flex" >
                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                  </button>
                  <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                  </button>
                </div>
              </div>
            </div>
  </nav>    
  <!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header d-flex align-items-center">
            <h1 class="modal-title fs-5 me-2">
              <i class="bi bi-person-circle"></i>
            User login
            </h1>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Adres email</label>
            <input type="email" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Hasło</label>
            <input type="password" class="form-control">
          </div>
          <div class='d-flex align-items-center justify-content-between mb-2'>
            <button type='submit'class='btn btn-dark shadow-none'>LOGIN</button>
            <a href="javascript: void(0)" class='text-secondary text-decoration-none'>Zapomniałem hasła</a>
          </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header d-flex align-items-center">
            <h1 class="modal-title fs-5 me-2">
            <i class="bi bi-person-add fs-3 me-2"></i>
            Utwórz konto
            </h1>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <span class="badge rounded-pill text-bg-light mb-3 test-wrap lh-base">
            Info: Pamiętaj, że Twoje dane muszą zgadzać się z Dokumentem Tożsamości (Dowód osobisty, paszport, prawo jazdy)
          </span>
          <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Imię i nazwisko</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Adres email</label>
              <input type="email" class="form-control">
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Numer telefonu</label>
              <input type="number" class="form-control">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Zdjęcie</label>
              <input type="file" class="form-control">
            </div>
            <div class="col-md-12 p-0 mb-3">
              <label class="form-label">Adres</label>
              <textarea class="form-control" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Kod pocztowy</label>
              <input type="number" class="form-control">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Data urodzenia</label>
              <input type="date" class="form-control">
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Hasło</label>
              <input type="password" class="form-control">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Potwierdź hasło</label>
              <input type="password" class="form-control">
            </div>
          </div>
          </div>
          <div class="text-center my-1">
            <button type='submit'class='btn btn-dark shadow-none'>REGISTER</button>

          </div>
          </div>     
        </form>
      </div>
    </div>
  </div>