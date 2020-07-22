<?php include('includes/header.php');?>
<?php include('includes/post.php');?>

    <div class="container">
      <header class="masthead" style="background-image: url('img/home-bg.webp')">
    <div class="overlay"></div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Gazdaság</h1>
            </div>
        </div>
      </div>
    </header>
  </div>

<body class="bg">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
             <h2 class="post-title">
               Mátészalka gazdaságának helyzete 2019
              </h2>
              <p class="post-meta"><img src="img/tibor01.webp" class="img-fluid rounded-circle"  width="50" alt="card image"> Szerző
                Kárpáti Tibor
                 augusztus 01, 2019</p>
          <?php foreach ($post as $key => $value): ?>
              <?php echo $value."<br><br>"; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    </div>

<?php include('includes/footer.php');?>
