
<nav id="nav" class="flex-column flex-shrink-0 vh-100 d-none" style="width: 4.5rem">
      <a href="<?=base_url('index.php/App')?>" class="d-block p-3 link-body-emphasis text-decoration-none">
        <img class="bi pe-none" width="40" height="32" src="<?=base_url()?>assets/image/logo.svg" alt="logo" />
      </a>
      <ul class="nav nav-pills flex-column mb-auto text-center my-auto">
        <li class="nav-item">
          <a href="<?=base_url('index.php/App')?>" class="nav-link py-3 border-bottom rounded-0" id="navHome" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-title="Home">
            <i class="fa-solid fa-house"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('index.php/App/news')?>" class="nav-link py-3 border-bottom rounded-0" id="navNews" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="News" data-bs-title="News">
            <i class="fa-solid fa-newspaper"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('index.php/App/weather')?>" class="nav-link py-3 border-bottom rounded-0" id="navWeather" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Weather" data-bs-title="Weather">
            <i class="fa-solid fa-cloud"></i>
          </a>
        </li>
      </ul>
      <div class="dropdown">
        <a
          href="#"
          class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none text-white dropdown-toggle"
          id="dropdownUser"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          aria-label="Settings"
        >
          <i class="fa-solid fa-user"></i>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
          <li><a class="dropdown-item" href="<?=base_url('index.php/App')?>">Home</a></li>
          <?php
          if ($this->session->userdata('role') == 'ADMIN') {?>
          
          <li><a class="dropdown-item" href="<?=base_url('index.php/App/userManagement')?>">User Management</a></li>
          <?php
          }
          ?>
          <li><a class="dropdown-item" href="<?=base_url('index.php/App/profile')?>">Profile</a></li>
          <li><hr class="dropdown-divider" /></li>
          <li><a class="dropdown-item" href="<?=base_url('index.php/logout')?>">Logout</a></li>
        </ul>
      </div>
    </nav>

    <div id="navDrawer" class="btn-group d-none">
      <button type="button" class="btn btn-lg rounded mt-4 ms-4" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-bars"></i>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?=base_url('index.php/App')?>">Home</a></li>
        <li><a class="dropdown-item" href="<?=base_url('index.php/App/news')?>">News</a></li>
        <li><a class="dropdown-item" href="<?=base_url('index.php/App/weather')?>">Weather</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="login.html">Logout</a></li>
      </ul>
    </div>

    <nav id="navMobile" class="fixed-bottom">
      <ul class="nav nav-pills d-flex justify-content-around">
        <li class="nav-item">
          <a class="nav-link active py-3" aria-current="page"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link py-3" href="news.html"><i class="fa-solid fa-newspaper"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link py-3" href="weather.html"><i class="fa-solid fa-cloud"></i></a>
        </li>
      </ul>
    </nav>