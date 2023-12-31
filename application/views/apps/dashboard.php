<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/image/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/image/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/image/favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>assets/image/favicon/site.webmanifest" />
    <link rel="mask-icon" href="<?=base_url()?>assets/image/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha384-VzLXTJGPSyTLX6d96AxgkKvE/LRb7ECGyTxuwtpjHnVWVZs2gp5RDjeM/tgBnVdM" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/home.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/responsive.css" />
  </head>

  <body>
    <?php
    $this->load->view('apps/navbar');
    ?>

    <div id="map" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; z-index: -1"></div>

    <div class="weather-widget" id="weather-widget">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-center mt-3">
            <div class="weather-icon">
              <img src="" alt="Weather Icon" id="weather-icon" />
            </div>
            <div class="weather-temp">
              <h2 id="temperature" class="card-title text-center mb-0"></h2>
              <p id="city" class="card-text text-center text-capitalize fw-bold"></p>
            </div>
          </div>
          <p id="error-message" class="error-message p-3"></p>
          <p id="description" class="card-text text-center mb-3 text-uppercase"></p>
        </div>
      </div>
    </div>
    <?php
    $this->load->view('apps/footer');
    ?>


    <div id="preloader">
      <div id="preloader-logo"></div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>

    
    <script>
    document.getElementById('navHome').classList.add('active');
    </script>
    <script src="https://unpkg.com/jquery@3.6.0/dist/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha384-RFZC58YeKApoNsIbBxf4z6JJXmh+geBSgkCQXFyh+4tiFSJmJBt+2FbjxW7Ar16M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/data/id.js"></script>
    <script src="<?=base_url()?>assets/scripts/home.js"></script>
    <script src="<?=base_url()?>assets/scripts/navigation.js"></script>
    <script src="<?=base_url()?>assets/scripts/weather-widget.js" type="module"></script>
  </body>
</html>