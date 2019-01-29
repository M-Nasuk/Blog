$(document).ready(function () {

  getData('./src/header.php', prependBody);

  getData('./src/inscription.php', prependInscri);

  getData('./src/posts.php', appendArticles);

  getData('./src/cat-billets.php', appendResult);

  getData('./src/post.php', appendPost);

  getData('./src/aside.php', appendAside);

  getData('./src/comms.php', appendComms);

  getData('./src/comm-form.php', appendFormComm);

  $('#add_comm').on('click', function(){
    $('#s_comms > div').toggleClass('hide');
  });

  $('#show_comms button').on('click', function() {
    show();
    idDiv();
    for (let i = 0; i < $('.comm').length; i++) {
      $(`button#${i}.answer`).on('click', displayForm);
    }
  });

  $.get('./src/nb_comms.php')
  .done(function (response)
  {
    $('#show_comms').before(response);
  });

})
