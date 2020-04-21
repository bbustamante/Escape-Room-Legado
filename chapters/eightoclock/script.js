let bannerStatus = 0;
let audioStatus = 0;

$( document ).ready(function() {
  $( '#flagupload' ).on( 'click', flagupload );
  $( '#flaguploader' ).on( 'change', flaguploader );
  $( '#song1 .row > div' ).on( 'click', sing );
  $( '#clap' ).on( 'click', clapper );
});

function flagupload() {
  $( '#flaguploader' ).click();
}

function flaguploader() {
  let file = $(this).val().replace(/.*(\/|\\)/, '').toUpperCase();
  if(file=='PIC_46ROVACM.JPG') {
    $( '#flag2 img' ).attr('src','/chapters/eightoclock/img/' + file);
    $( '#flag1' ).hide();
    $( '#flag2' ).show();

    bannerStatus = 1;
    if( chkStatus() ) {
      $( '#cuco' ).attr('src','/chapters/eightoclock/img/cucooclock.jpg');
    }
  } else {
    $( '#flagmeh' ).show();
  }
}

function sing() {
  let songpart = $(this).find('div');
  if( songpart.hasClass('selected') ) {
    songpart.removeClass('selected');
  } else {
    songpart.closest('div.row').find('.songpart').removeClass('selected');
    songpart.addClass('selected');
  }
  let songparts = $('.songpart.selected').length;
  if( songparts == 3 ) {
    let part1 = $( '#songparts1 > .right > div' );
    let part2 = $( '#songparts2 > .center > div' );
    let part3 = $( '#songparts3 > .right > div' );
    if(
      part1.hasClass('selected')
      && part2.hasClass('selected')
      && part3.hasClass('selected')
    ) {
      $( '#song1' ).hide();
      $( '#song2' ).show();

      audioStatus = 1;
      if( chkStatus() ) {
        $( '#cuco' ).attr('src','/chapters/eightoclock/img/cucooclock.jpg');
      }
    } else {
      $( '#songError' ).removeClass('hide');
    }
    $( '#audioModal' ).scrollTop(0);
  }
}

function clapper() {
  if( chkStatus() ) {
    $( '#clapoff' ).hide();
    $( '#clapon' ).show();
  }
}

function chkStatus() {
  return ( bannerStatus == 1 && audioStatus == 1 );
}
