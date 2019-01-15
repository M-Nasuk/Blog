$(document).ready(function () {

  $.getJSON('admin/data.php', function(data) {
    for (let i = 0; i < data['posts'].length; i++) {
      $('<option>').val(i).html(JSON.parse(data['posts'][i])['titre']).appendTo('select[name="billet"]');
    }
  });

  $('select[name="billet"]').change(function() {
    $.getJSON('admin/data.php', function(data) {
      //console.log(data);
      $('<li>').html(
        $('<input>').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet'])
      ).prepend($('<label>').html('ID :')).appendTo('#fd ul');
      
      $('<li>').html(
        $('<input>').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre'])
      ).prepend($('<label>').html('Titre :')).appendTo('#fd ul');


    });
  });

})
