$( document ).ready(function() {
  $( 'input[type=checkbox]' ).on( 'change', checklist );
  $( '.fixedItem' ).on( 'click', fixedItem );
});

function checklist() {
  $( '#totallist' ).text('0');
  let checkedVals = $('input:checkbox:checked').map(function() {
    let total = parseFloat( $( '#totallist' ).text().replace(',','.') );
    let productprice = parseFloat( $( this ).data('price') );
    let sum = (total + productprice).toFixed(2).replace('.',',');
    $( '#totallist' ).text( sum );
    return this.value;
  }).get();
  let list =  checkedVals.join(",");
  if( list == 'oregano,esparragos,champiñones,pimenton,judias,pimiento,canela,alubias,chili,carne,sal,aceite' ) {
    nextChapter();
  }
}

function fixedItem(event) {
  event.preventDefault();
}
