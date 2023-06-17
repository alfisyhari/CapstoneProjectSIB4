<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Marin - News App</title>
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/image/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/image/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/image/favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>assets/image/favicon/site.webmanifest" />
    <link rel="mask-icon" href="<?=base_url()?>assets/image/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/home.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
  </head>

  <body>
    
  <?php
    $this->load->view('apps/navbar');
    ?>

    <main>
      <section id="news" class="container pt-5">
        <div class="mb-3">
          <h1>Related News</h1>
          <div id="card" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4"></div>
        </div>
      </section>
      <section id="weatherCardContainer" class="mt-5 mx-auto">
        <div class="card-group justify-content-center text-center row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3"></div>
      </section>
    </main>

    <?php
    $this->load->view('apps/footer');
    ?>

    <div id="preloader">
      <div id="preloader-logo"></div>
    </div>

    
    <script>
    document.getElementById('navNews').classList.add('active');
    </script>
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

    <script src="<?=base_url()?>assets/scripts/home.js"></script>
    <script src="<?=base_url()?>assets/scripts/navigation.js"></script>
    <script src="<?=base_url()?>assets/scripts/weather-card.js" type="module"></script>
    <script src="<?=base_url()?>assets/scripts/article.js" type="module"></script>
    
  </body>
</html>
