<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">PhpNatif</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li <?php 
      echo ($pageParent == 'profil') ? "class='nav-item active'" : "nav-item";?>>
          <a href="accueil.php" class='nav-link'>Profil</a>
      </li>
      <li class="nav-item">
                <!-- dateTime-->
                <?php //$date = new dateTime();
          echo "<a class='nav-link'>" . date('d/m/Y') . "</a>";
        ?>
      </li>
    </ul>
  </div>
</nav>
