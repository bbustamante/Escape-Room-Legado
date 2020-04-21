let referrer =  document.referrer;
let pathname = window.location.pathname;
gotostart(referrer,pathname);

$( document ).ready(function() {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  $('.clueGroup').click( function(e) {
      $('.collapse').collapse('hide');
  });
});

function youlose() {
  $( '#youlose' ).css('display', 'flex');
}

function nextChapter() {
  window.location.href = '/' + $('#chnxt').data('chnxt') + '/';
}

function gotostart(referrer,pathname) {
  let localhost = referrer.search("localhost");
  let elsotano = referrer.search("elsotanojuegos");
  if (pathname!="/") {
    if ( localhost == -1 && elsotano == -1) {
      window.location.href = '/';
    }
  }
}
