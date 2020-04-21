$( document ).ready(function() {
  $( '#lostpassend' ).on( 'click', lostpassend );
  $( '#lostpascheck' ).on( 'click', lostpascheck );
  $( '#blockdoor' ).on( 'click', blockdoor );
});

function lostpassend(event) {
  event.preventDefault();
  jQuery.post( '/serverside/lostpass.php', {
    email: $('#lostpassmail').val()
  })
  .done(function( data ) {
    if(data.status == 'OK' ) {
      $( '#lostpassstep1' ).hide();
      $( '#lostpassstep2' ).show();
      $( '.modal-footer' ).hide();
    } else {
      $( '#lostpassstep1error' ).show();
    }
  })
  .fail(function() {
    $( '#lostpassstep1error' ).show();
  });
}

function lostpascheck(event) {
  event.preventDefault();
  let petname = $('#petname').val().trim().toLowerCase();
  let street = $('#street').val().trim().toLowerCase();
  let meaning = $('#meaning').val().trim().toLowerCase();
  let check = 'KO';
  if (petname == 'paca' || petname == 'paca la alpaca' ) {
    if (street == 'calle falsa 123' || street == 'falsa 123') {
      if (meaning == '42') {
        check = 'OK';
      }
    }
  }
  if (check == 'OK') {
    $( '#lostpassstep2' ).hide();
    $( '#lostpassstep3' ).show();
  } else {
    $( '#lostpassstep2error' ).show();
  }
}

function blockdoor(event) {
  event.preventDefault();
  let codigo = $('#codigo').val().trim().toLowerCase();
  if (codigo == '05071985' ) {
    nextChapter();
  }
}
