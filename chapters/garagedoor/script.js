$( document ).ready(function() {
  $( '#countdown' ).countdown({until: +60, format: 'MS', compact: true, description: '', onTick: garagecutdown});
  $( '#garagedoor' ).on( 'click', garagedoor );
  $( '.ninjalink' ).on( 'click', ninjalink );
  $( '#btn-up' ).on( 'click', garageup );
  $( '#btn-down' ).on( 'click', garagedown );
});

function garagecutdown(periods) {
  let arr = [ 60,45,30,15,0 ];
  let timer = $.countdown.periodsToSeconds(periods);
  if( jQuery.inArray( timer, arr ) !== -1 ){
    garagedooraction($( '#garagedoor' ), timer);
  }
  if(timer === 0){
    youlose();
  }
}

function garagedoor() {
  if ($(this).hasClass('garagedoor-paused')) {
    garagedoorpaused($(this));
  } else {
    let periods = $('#countdown').countdown('getTimes');
    let timer = $.countdown.periodsToSeconds(periods);
    if(timer>60){
      timer = 60;
    }else if (timer>45) {
      timer = 45;
    }else if (timer>30) {
      timer = 30;
    }else if (timer>15) {
      timer = 15;
    }else {
      timer = 0;
    }
    $( '#countdown' ).countdown('option', {until: +timer})
  }
}

function garagedooraction(door, timer) {
  if (timer>45) {
    door.attr('src', '/chapters/garagedoor/img/garagedoor1.jpg');
  }else if (timer>30) {
    door.attr('src', '/chapters/garagedoor/img/garagedoor2.jpg');
  }else if (timer>15) {
    door.attr('src', '/chapters/garagedoor/img/garagedoor3.jpg');
  }else if (timer>0) {
    door.attr('src', '/chapters/garagedoor/img/garagedoor4.jpg');
  } else {
    door.attr('src', '/chapters/garagedoor/img/garagedoor5.jpg');
  }
}

function garagedoorpaused(door) {
  let img = door.attr('src');
  let id = parseInt(img.match(/\d+/));
  let action = door.data('open');

  if( action == 'y' ) {
    if( id < 5 ) {
      door.attr('src', img.replace( id, id+1 ));
    }
  } else {
    if( id > 0 ) {
      door.attr('src', img.replace( id, id-1 ));
    }
  }

  img = door.attr('src');
  id = parseInt(img.match(/\d+/));

  if(id === 5){
    youlose();
  }
  if(id === 0){
    nextChapter();
  }
}

function ninjalink(event) {
  event.preventDefault();
  $( '#countdown' ).countdown('pause');
  $( '#countdown' ).addClass('countdown-paused');
  $( '#garagedoor' ).addClass('garagedoor-paused');
  $( '.chaptertext' ).html( '<span><strong>¡PERFECTO!</strong> Es hora de cerrar esa puerta.</span>' );
  let controlposition = $( '#countdown' ).innerHeight() + 20;
  $( '#garagecontrol' ).css( 'top', controlposition );
  $( '#garagecontrol' ).show();
  $( '.clueGroup' ).addClass('hide');
  $( '.clueGroup-2' ).removeClass('hide');
}

function garageup() {
  $( '#btn-up' ).removeClass( 'btn-dark' );
  $( '#btn-up' ).addClass( 'btn-light' );

  $( '#btn-down' ).removeClass( 'btn-light' );
  $( '#btn-down' ).addClass( 'btn-dark' );

  $( '#garagedoor' ).data( 'open', 'y' );
}

function garagedown() {
  $( '#btn-down' ).removeClass( 'btn-dark' );
  $( '#btn-down' ).addClass( 'btn-light' );

  $( '#btn-up' ).removeClass( 'btn-light' );
  $( '#btn-up' ).addClass( 'btn-dark' );

  $( '#garagedoor' ).data( 'open', 'n' );
}
