<div id="step-1">
  <!-- Image -->
  <div class="chapterimage">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img id="numberpad" class="img-fluid img-thumbnail rounded" src="/chapters/blockthedoor/img/numberpad.jpg">
        </div>
      </div>
    </div>
  </div>

  <!-- Text -->
  <div class="chaptertext">
    <span>No es todo lo que te gustaría, pero tampoco ha sido una mala compra.
      Deberíamos introducir el código de bloqueo de la puerta antes de ir al salón.</span>
    <br>
    <span><a href="" data-toggle="modal" data-target="#lostpass">No recuerdo mi contraseña</a></span>
  </div>
  <div class="chapteraction">
    <form class="form-inline">
      <div class="form-group mx-sm-3 mb-2">
        <label for="codigo" class="sr-only">Código</label>
        <input type="password" class="form-control" id="codigo" placeholder="Código">
      </div>
      <button type="submit" id="blockdoor" class="btn btn-danger mb-2">BLOQUEAR</button>
    </form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="lostpass" tabindex="-1" role="dialog" aria-labelledby="lostpassLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lostpassLabel">Recuperar contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="lostpassstep1">
            <div id="lostpassstep1error" class="alert alert-danger text-smaller" role="alert">
              No hemos podido enviar el correo. Vuelve a intentarlo más tarde o prueba con otro correo electrónico, gracias.
            </div>
            <form>
              <div class="form-group">
                <input type="email" id="lostpassmail" class="form-control" aria-describedby="emailLaw" placeholder="Email">
              </div>
              <button type="submit" id="lostpassend" class="btn btn-outline-primary btn-sm btn-block">Enviar</button>
              <small id="emailLaw" class="form-text text-muted">El correo no quedará registrado en ningún fichero o base de datos ni será usado de ningún otro modo aparte del envío de este correo.</small>
            </form>
          </div>
          <div id="lostpassstep2">
            <form>
              <div id="lostpassstep2error" class="alert alert-danger text-smaller" role="alert">
                Usted no parece ser George Kaplan.
              </div>
              <div class="form-group">
                <label for="petname">¿Cuál es el nombre de mi mascota favorita?</label>
                <input type="text" id="petname" class="form-control">
              </div>
              <div class="form-group">
                <label for="street">¿Cuál es mi dirección?</label>
                <input type="text" id="street" class="form-control">
              </div>
              <div class="form-group">
                <label for="meaning">¿Cuál es el sentido de la vida, el universo y todo lo demás?</label>
                <input type="text" id="meaning" class="form-control">
              </div>
              <button type="submit" id="lostpascheck" class="btn btn-outline-primary btn-sm btn-block">Comprobar</button>
            </form>
          </div>
          <div id="lostpassstep3">
            <div class="digits">05071985</div>
          </div>
        </div>
        <div class="modal-footer">
          <span class="text-danger"><i class="fad fa-exclamation-triangle"></i> Si el correo no llega revisa tu carpeta de <strong>SPAM</strong>.</span>
        </div>
      </div>
    </div>
  </div>
</div>
