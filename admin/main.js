$(document).ready(function () {

  $.getJSON('admin/data.php', function(data) {
    //.appendTo('select[name="billet"]');
    for (let i = 0; i < data['posts'].length; i++) {
      $(`<option>`).val(i).html(JSON.parse(data['posts'][i])['titre']).appendTo('select[name="billet"]');
    }
  });
  $('select[name="billet"] option[value=0]').attr('selected','selected');

  $('select[name="billet"]').change(function() {
    $.getJSON('admin/data.php', function(data) {
      //console.log(data);
      $('#fd ul').html('');
      $('<li>').html(
        $('<input type=text>').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet'])
      ).prepend($('<label>').html('ID :')).appendTo('#fd ul');

      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre'])
      ).prepend($('<label>').html('Titre :')).appendTo('#fd ul');

      $('<li>').html(
        $('<textarea rows="4">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['corps_de_texte'])
      ).prepend($('<label>').html('Corps :')).appendTo('#fd ul');

      $('<li>').html(
        $('<input type="file">'))
        .prepend($('<label>').html('Image :'))
        .append($('<img>').attr('src', 'public/images/'+JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre']+'.jpeg'))
        .appendTo('#fd ul');

      $('<li>').html(
        $('<select name="cat">'))
        .prepend($('<label>').html('Categorie :'))
        .appendTo('#fd ul');
      for (let i = 0; i < data['posts'].length; i++) {
        $('<option value>').val(i).html(JSON.parse(data['cat'][i])['nom']).appendTo('select[name="cat"]');
      }



    });
  });

})
