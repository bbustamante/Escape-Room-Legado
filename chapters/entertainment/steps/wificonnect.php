<?php
  $wifiform = '
  <form class="form-inline hide">
    <div class="form-group mx-sm-3">
      <input type="password" class="form-control" class="wifiPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-alt-to-right"></i></button>
  </form>
  <span class="wifiErrorMsg text-danger hide"><i class="fad fa-exclamation-triangle"></i> Contraseña incorrecta</span>
  ';
?>
<!-- Text -->
<div class="chaptertext">
  <span>Selecciona red WiFi</span>
</div>

<ul id="wifilist" class="list-group">
  <li class="list-group-item" data-wifi="0">
    <i class="fad fa-wifi"></i> Este no es el WiFi que estás buscando
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="1">
    <i class="fad fa-wifi"></i> MAMA USA ESTA
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="2">
    <i class="fad fa-wifi-1"></i> nananananananananana_WiFi
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="3">
    <i class="fad fa-wifi"></i> 4 8 15 16 23 42
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="4">
    <i class="fad fa-wifi-2"></i> Martin Router King
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="5">
    <i class="fad fa-wifi"></i>
    <?php echo $wifiform; ?>
  </li>
  <li class="list-group-item" data-wifi="6">
    <i class="fad fa-wifi-slash"></i> CambioWifiXLevadura
    <form class="form-inline hide"><p class="text-muted">Red WiFi no disponible.</p></form>
  </li>
</ul>
