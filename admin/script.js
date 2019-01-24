function getJsonData(link, func)
{
  $.getJSON(link)
  .done(func);
}

function insertJSON(response)
{
  $('#fd').html('<ul>');
  $('<li>').html(response).appendTo('#fd > ul');
}

function showPost() {
  $.getJSON('admin/data.php', function(data) {
    $('#fd ul').html('');
    $('<li>').html(
      $('<label>').text(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet'])
    ).append($('<input type="hidden" name="id">')).val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet'])
    .prepend($('<label>').html('ID : ')).appendTo('#fd ul');

    $('<li>').html(
      $('<input type="text" name="billet_titre">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre'])
    ).prepend($('<label>').html('Titre :')).appendTo('#fd ul');

    $('<li>').html(
      $('<textarea rows="4" name="billet_cdt">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['corps_de_texte'])
    ).prepend($('<label>').html('Corps :')).appendTo('#fd ul');

    $('<li>').html(
      $('<input type="file" name="billet_img" accept="image/*">'))
      .prepend($('<label>').html('Image :'))
      .append($('<img>').attr('src', 'public/images/'+JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre']+'.jpeg'))
      .appendTo('#fd ul');

    $('<li>').html(
      $('<select name="categorie">'))
      .prepend($('<label>').html('Categorie :'+JSON.parse(data['posts'][$('select[name="billet"]').val()])['categorie']))
      .appendTo('#fd ul');

    $('<li>').html(
      $('<button type="submit" style="display: block; margin: 1rem auto; font-size: 2em;">Modifier</button>'))
      .appendTo('#fd ul');

    for (let i = 0; i < data['cat'].length; i++) {
      $('<option>').val(i).html(JSON.parse(data['cat'][i])['nom']).appendTo('select[name="categorie"]');
    }
  });
}

function showUser() {
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
}
