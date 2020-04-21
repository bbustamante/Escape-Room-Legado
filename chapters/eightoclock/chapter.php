<div id="step-1">
  <!-- Image -->
  <div class="chapterimage">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img id="cuco" class="img-fluid img-thumbnail rounded" src="/chapters/eightoclock/img/cuco.jpg">
        </div>
      </div>
    </div>
  </div>

  <!-- Image -->
  <div class="chapterinventory">
    <a data-toggle="modal" data-target="#bannerModal" class="clickable">
      <img id="banner" src="/chapters/eightoclock/img/paint.png">
    </a>
    <a data-toggle="modal" data-target="#audioModal" class="clickable">
      <img id="audio" src="/chapters/eightoclock/img/jukebox.png">
    </a>
    <a data-toggle="modal" data-target="#clapModal" class="clickable">
      <img id="clap" src="/chapters/eightoclock/img/clap.png">
    </a>
  </div>

  <!-- Text -->
  <div class="chaptertext">
    <span>El tiempo se pasa volando cuando te lo pasas bien. ¡Son casi
    las ocho en punto! Hay que prepararse.<br>
    <strong>Y recuerda encender el sonido de tu ordenador</strong>.</span>
  </div>
</div>

<?php
require_once('chapters/eightoclock/imagemodal.php');
require_once('chapters/eightoclock/audiomodal.php');
require_once('chapters/eightoclock/clapmodal.php');
?>
