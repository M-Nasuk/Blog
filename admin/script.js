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
      $('<label>').text(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet']))
      .append($('<input type="hidden" name="billet_id">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['id_billet']))
      .prepend($('<label>').html('ID : ')).appendTo('#fd ul');

    $('<li>').html(
      $('<input type="text" name="billet_titre">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre']))
      .append($('<input type="hidden" name="exTitle">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre']))
      .prepend($('<label>').html('Titre :')).appendTo('#fd ul');

    $('<li>').html(
      $('<textarea rows="4" name="billet_cdt">').val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['corps_de_texte']))
      .prepend($('<label>').html('Corps :')).appendTo('#fd ul');

    $('<li>').html(
      $('<input type="file" name="billet_img" accept="image/*">'))
      .prepend($('<label>').html('Image :'))
      .append($('<img style="max-width: 100%;">').attr('src', 'public/images/'+JSON.parse(data['posts'][$('select[name="billet"]').val()])['titre']+'.jpeg'))
      .appendTo('#fd ul');

    $('<li>').html(
      $('<select name="categorie">'))
      .prepend($('<label style="margin-right: 1rem;">').html('Categorie : '+JSON.parse(data['posts'][$('select[name="billet"]').val()])['categorie']))
      .appendTo('#fd ul');

    $('<option>Selectionnez une categorie</option>')
    .val(JSON.parse(data['posts'][$('select[name="billet"]').val()])['categorie'])
    .prependTo('select[name="categorie"]');

    $('<li>').html(
      $('<button type="submit" name="update" value="update" style="display: block; margin: 1rem auto; font-size: 2em;">Modifier</button>'))
      .appendTo('#fd ul');

    $('<li>').html(
      $('<button type="submit" name="update" value="delete" style="display: block; margin: 1rem auto; font-size: 2em;">Supprimer Post</button>'))
      .appendTo('#fd ul');

    let x = 0;
    for (let i = 1; i < data['cat'].length + 1; i++) {
      $('<option>').val(i).html(JSON.parse(data['cat'][x])['id_categorie']+' - '+JSON.parse(data['cat'][x++])['nom']).appendTo('select[name="categorie"]');
    }
  });
}

function showUser() {
  $.getJSON('admin/data.php', function(data) {
    $('#fd_user ul').html('');
    $('<li>').html(
      $('<input type="text" name="nom">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['nom']))
      .append($('<input type="hidden" name="user_id">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['id_utilisateur']))
      .prepend($('<label>').html('Nom :')).appendTo('#fd_user ul');

    $('<li>').html(
      $('<input type="text" name="prenom">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['prenom']))
      .prepend($('<label>').html('Prenom :')).appendTo('#fd_user ul');

    $('<li>').html(
      /*$('<input type="text" name="pseudo">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo']))
      .append(*/$('<input type="hidden" name="exPseudo">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo']))
      .prepend($('<label>').html('Pseudo : '+JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo'])).appendTo('#fd_user ul');

    $('<li>').html(
      $('<input type="text" name="email">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['e_mail']))
      .prepend($('<label>').html('Email :')).appendTo('#fd_user ul');

    $('<li>').html(
      $('<input type="text" name="telephone">').val(JSON.parse(data['users'][$('select[name="user"]').val()])['telephone']))
      .prepend($('<label>').html('Telephone :')).appendTo('#fd_user ul');

    $('<li>').html(
      /*$('<input type="file" name="avatar">'))
      .prepend(*/$('<label style="vertical-align: top;">').html('Avatar :'))
      .append($('<img style="max-width: 100%;">').attr('src', 'public/user/'+JSON.parse(data['users'][$('select[name="user"]').val()])['pseudo']+'.jpeg'))
      .appendTo('#fd_user ul');

    $('<li>').html(
      $('<label>').html('Role : '+JSON.parse(data['users'][$('select[name="user"]').val()])['role']))
      .appendTo('#fd_user ul');

    $('<li>').html(
      $('<select name="role">'))
      .prepend($('<label>').html('New role :'))
      .appendTo('#fd_user ul');

    $('<option>Selectionnez un role</option>')
    .val(JSON.parse(data['users'][$('select[name="user"]').val()])['role'])
    .prependTo('select[name="role"]');

    $('<li>').html(
      $('<button type="submit" name="update" value="update" style="display: block; margin: 1rem auto; font-size: 2em;">Modifier</button>'))
      .appendTo('#fd_user ul');

    $('<li>').html(
      $('<button type="submit" name="update" value="delete" style="display: block; margin: 1rem auto; font-size: 2em;">Supprimer Utilisateur</button>'))
      .appendTo('#fd_user ul');

    for (let i = 0; i < data['roles'].length; i++) {
      $('<option>').val(i).html(JSON.parse(data['roles'][i])['titre']).appendTo('select[name="role"]');
    }
  });
}
