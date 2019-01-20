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

  $('select[name="billet"]').change(function() {
    $.getJSON('admin/data.php', function(data) {
      $('#fd ul').html('');
      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet'])
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
        $('<select name="categorie">'))
        .prepend($('<label>').html('Categorie :'))
        .appendTo('#fd ul');

      $('<li>').html(
        $('<button type="submit" style="display: block; margin: 1rem auto; font-size: 2em;">Modifier</button>'))
        .appendTo('#fd ul');

      for (let i = 0; i < data['cat'].length; i++) {
        $('<option>').val(i).html(JSON.parse(data['cat'][i])['nom']).appendTo('select[name="categorie"]');
      }
    });
  });

  $('select[name="user"]').change(function() {
    $.getJSON('admin/data.php', function(data) {
      $('#fd_user ul').html('');
      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['nom'])
      ).prepend($('<label>').html('Nom :')).appendTo('#fd_user ul');

      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['prenom'])
      ).prepend($('<label>').html('Prenom :')).appendTo('#fd_user ul');

      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo'])
      ).prepend($('<label>').html('Pseudo :')).appendTo('#fd_user ul');

      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['e_mail'])
      ).prepend($('<label>').html('Email :')).appendTo('#fd_user ul');

      $('<li>').html(
        $('<input type="text">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['telephone'])
      ).prepend($('<label>').html('Telephone :')).appendTo('#fd_user ul');

      $('<li>').html(
        $('<input type="file">'))
        .prepend($('<label>').html('Image :'))
        .append($('<img>').attr('src', 'public/user/'+JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo']+'.jpeg'))
        .appendTo('#fd_user ul');

      $('<li>').html(
        $('<label>').html('Role : '+JSON.parse(data['users'][$('select[name="user"]').val()])['role'])
      ).appendTo('#fd_user ul');

      $('<li>').html(
        $('<select name="role">'))
        .prepend($('<label>').html('New role :'))
        .appendTo('#fd_user ul');

      $('<li>').html(
        $('<button type="submit" style="display: block; margin: 1rem auto; font-size: 2em;">Modifier</button>'))
        .appendTo('#fd_user ul');

      for (let i = 0; i < data['roles'].length; i++) {
        $('<option>').val(i).html(JSON.parse(data['roles'][i])['titre']).appendTo('select[name="role"]');
      }
    });
  });

})
