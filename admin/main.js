$(document).ready(function () {

  $.getJSON('admin/data.php', function(data) {
    $('<option>Selectionnez un article</option>').prependTo('select[name="billet"]');
    for (let i = 0; i < data['posts'].length; i++) {
      $(`<option>`).val(i).html(JSON.parse(data['posts'][i])['titre']).appendTo('select[name="billet"]');
    }
  });

  $.getJSON('admin/data.php', function(data) {
    $('<option>Selectionnez un utilisateur</option>').prependTo('select[name="user"]');
    for (let i = 0; i < data['users'].length; i++) {
      $(`<option>`).val(i).html(JSON.parse(data['users'][i])['pseudo']).appendTo('select[name="user"]');
    }
  });

  $('select[name="billet"]').change(showPost);

  $('select[name="user"]').change(showUser);



})
