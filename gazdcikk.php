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
    </div>
  </header>

<body class="bg">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
             <h2 class="post-title">
                Heves viták a Kossuth utcai fejlesztések körül
              </h2>
              <p class="post-meta"><img src="img/tibor01.webp" class="img-fluid rounded-circle"  width="50" alt="card image"> Szerző
                Kárpáti Tibor
                 augusztus 01, 2019</p>
          <p><strong><?php echo $posts['post-main']; ?></strong></p>
          <h3><strong>Rövid történelmi előzetes</strong></h3>
          <p><?php echo $posts['post-content']. "<br><br>" . $posts['post-content01']; ?></p>
        <h3><strong>Miről is szól a vita?</strong></h3>
          <p><?php echo $posts['post-content02']. "<br><br>" . $posts['post-content03']; ?></p>
        <h3>Mi a teendő?!</h3>
          <p><?php echo $posts['post-content04']. "<p>Elvégzendő:</p>" . $posts['post-content05'];; ?></p>
          <p><?php echo $posts['post-content06']. "<p>Megvizsgálandó:</p>". $posts['post-content07']; ?></p>
           <p><?php echo $posts['post-content08']. "<br><br>" . $posts['post-content09']; ?></p>
           
        </div>
      </div>
    </div>
    </div>

<?php include('includes/footer.php');?>
