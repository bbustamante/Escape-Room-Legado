$( document ).ready(function() {
  $( '#btn-resource' ).addClass('hide');
  $( '#tele' ).on( 'click', wifi );
  $( '#wifitelevision' ).on( 'click', wificonnect );
  $( '#wifilist li' ).on( 'click', selectedwifi );
  $( '#wifilist li' ).on( 'submit', checkwifi );
  $( '#frequency .freqnumber' ).on( 'click', freqnumber );
  $( '#frequency button' ).on( 'click', checkfreq );
  $( '#favchannel1' ).on( 'click', favchannel );
  $( '#favchannel2' ).on( 'click', favchannel );
  $( '#favchannel3' ).on( 'click', favchannel );
});

function wifi() {
  nextstep(1);
}

function wificonnect() {
  nextstep(2);
  $( '#btn-resource' ).removeClass('hide');
}

function selectedwifi() {
  $( '#wifilist form' ).addClass('hide');
  $( '#wifilist input' ).removeClass('errorPass');
  $( '#wifilist .wifiErrorMsg' ).addClass('hide');
  $( this ).find('form').removeClass('hide');
  $( this ).find('input').focus();
}

function checkwifi(event) {
  event.preventDefault();
  let wifi = $( this ).closest('li');
  let id = wifi.data('wifi');
  if(id==5){
    if(wifi.find('input').val() == 'AmarillaTeleoperadorSuaveZumbaPez') {
      nextstep(3);
      $( '#btn-resource' ).addClass('hide');
    } else {
      errorWiFi(wifi);
    }
  } else {
    errorWiFi(wifi);
  }
}

function errorWiFi( wifi ) {
  wifi.find('input').addClass('errorPass');
  wifi.find('.wifiErrorMsg').removeClass('hide');
  wifi.find('input').val('');
}

function freqnumber() {
  if (!isCheckedChannel( $(this) )) {
    let number =  parseInt( $(this).text() );
    number = number + 1;
    if( number == 10 ) {
      number = 0;
    }
    $(this).text(number);
  }
}

function checkfreq(event) {
  event.preventDefault;
  if (!isCheckedChannel( $(this) )) {
    let container = $(this).closest('div');
    let centenas = container.children('span').first().text();
    let decenas =  container.children('span').last().text();
    let number = centenas + decenas;
    let freq = container.attr('id');
    switch(freq) {
      case 'freq1':
        if (number == '69') {
          fixchannel(freq);
        } else {
          notfoundchannel();
        }
        break;
      case 'freq2':
        if (number == '84') {
          fixchannel(freq);
        } else {
          notfoundchannel();
        }
        break;
      case 'freq3':
        if (number == '96') {
          fixchannel(freq);
        } else {
          notfoundchannel();
        }
        break;
    }
  }
}

function isCheckedChannel(element) {
  let container = element.closest('div');
  return container.hasClass('checkedfreq');
}

function fixchannel(freq) {
  let container = $('#'+freq);
  let button = container.find('button');
  button.removeClass('btn-primary');
  button.addClass('btn-success');
  button.html('<i class="fad fa-check-double"></i>');
  container.addClass('checkedfreq');
  let numchannels = $('.checkedfreq').length;
  if(numchannels == 3) {
    nextstep(4);
  }
}

function notfoundchannel() {
  $('#notfound').modal('show');
}

function favchannel() {
  let id = $(this).attr('id');
  switch (id) {
    case 'favchannel1':
      $('#payday').removeClass('hide');
      break;
    case 'favchannel2':
      $('#teaser').removeClass('hide');
      break;
    case 'favchannel3':
      $('#amenaza').removeClass('hide');
      break;
  }
  nextstep(5);
  setTimeout(nextChapter, 30000);
}

function nextstep(curstep) {
  $( '#step-' + curstep ).addClass('hide');
  $( '#step-' + (curstep+1) ).removeClass('hide');
  $( '.clueGroup' ).addClass('hide');
  $( '.clueGroup-' + (curstep+1) ).removeClass('hide');
}
