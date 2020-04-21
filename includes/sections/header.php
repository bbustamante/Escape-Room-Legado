<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="https://www.elsotanojuegos.es" target="_blank"><img class="img-responsive" src="/includes/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <h2>El Legado del Escapista</h2>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <?php
        $path = "chapters/" . $chapter . "/notifications.php";

        if( file_exists( $path ) ) {
          require_once($path);
        }
        ?>

        <?php
        $path = "chapters/" . $chapter . "/resource.php";

        if( file_exists( $path ) ) {
          require_once($path);
        }
        ?>

        <?php
        $path = "chapters/" . $chapter . "/clue.php";

        if( file_exists( $path ) ) {
          ?>
          <button type="button" id="btn-clue" class="btn btn-danger" data-toggle="modal" data-target="#clueModal">
            <i class="fas fa-search" data-toggle="tooltip" data-placement="top" title="Pistas"></i>
          </button>
        <?php
        }
        ?>

        <button type="button" id="btn-info" class="btn btn-info" data-toggle="modal" data-target="#infoModal">
          <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Información del juego"></i>
        </button>
      </form>
    </div>
  </nav>
</header>
