<div id="step-1">
  <!-- Text -->
  <div class="chaptertext">
    <span>¡Lo que faltaba! Ahora resulta que, al sincronizar, la lista de
      la compra ha fallado. Tendrás que confirmar manualmente qué productos
      has comprado esta mañana en el supermercado.
      <br><strong>Para complicar más el asunto, parece que hay múltiples
      combinaciones de productos que dan el mismo precio, pero sólo una es
      la buena</strong>.</span>
  </div>

  <!-- List -->
  <div class="chapterlist row">
    <div class="col-sm-6">
      <ul class="list-group">
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="0.26" value="oregano" id="oregano">
          <label class="form-check-label" for="oregano">Orégano <em>(0,26€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="1.73" value="esparragos" id="esparragos">
          <label class="form-check-label" for="esparragos">Espárragos <em>(1,73€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="0.54" value="champiñones" id="champiñones">
          <label class="form-check-label" for="champiñones">Champiñones <em>(0,54€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="1.22" value="pimenton" id="pimenton">
          <label class="form-check-label" for="pimenton">Pimentón <em>(1,22€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="2.51" value="judias" id="judias">
          <label class="form-check-label" for="judias">Judías Verdes <em>(2,51€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="3.86" value="ajos" id="ajos">
          <label class="form-check-label" for="ajos">Ajos <em>(3,86€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="0.86" value="pimiento" id="pimiento">
          <label class="form-check-label" for="pimiento">Pimiento Rojo <em>(0,86€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="3.70" value="yogures" id="yogures">
          <label class="form-check-label" for="yogures">Yogures <em>(3,70€)</em></label>
        </div></li>
      </ul>
    </div>

    <div class="col-sm-6">
      <ul class="list-group">
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="3.42" value="canela" id="canela">
          <label class="form-check-label" for="canela">Canela en Rama <em>(3,42€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="5.13" value="alubias" id="alubias">
          <label class="form-check-label" for="alubias">Alubias Pintas <em>(5,13€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="10.92" value="papel" id="papel">
          <label class="form-check-label" for="papel">Papel Higiénico <em>(10,92€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="1.74" value="chili" id="chili">
          <label class="form-check-label" for="chili">Chili <em>(1,74€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="7.76" value="carne" id="carne">
          <label class="form-check-label" for="carne">Carne picada <em>(7,76€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="4.44" value="" id="azucar">
          <label class="form-check-label" for="azucar">Azúcar Glass <em>(4,44€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="0.05" value="sal" id="sal">
          <label class="form-check-label" for="sal">Sal <em>(0,05€)</em></label>
        </div></li>

        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="checkbox" data-price="6.33" value="aceite" id="aceite">
          <label class="form-check-label" for="aceite">Aceite <em>(6,33€)</em></label>
        </div></li>
      </ul>
    </div>
  </div>

  <div class="chaptertext">
    <span><strong>TOTAL:</strong> <span id="totallist">0,00</span> €</span>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="notifications" tabindex="-1" role="dialog" aria-labelledby="notificationsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationsLabel">Notificaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <ul class="list-group">
            <li class="list-group-item">
              <i class="fab fa-twitter"></i>
              <a href="https://twitter.com/GeorgeK82444900" target="_blank">@GeorgeK82444900</a>,
              tienes nuevos "Me Gustas".
            </li>
            <li class="list-group-item">
              <i class="fad fa-sync-alt"></i> Error sincronizando 12 productos de 16.
            </li>
            <li class="list-group-item">
              <i class="fad fa-money-bill"></i> Compra de 31,55€ aceptada.
            </li>
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <span class="text-muted">Tienes notificaciones nuevas.</span>
      </div>
    </div>
  </div>
</div>
