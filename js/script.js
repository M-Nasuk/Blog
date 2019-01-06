function getData(link, func)
{
  $.get(link)
  .done(func);
}

function prependBody(response)
{
  $('body').prepend(response);
}

function appendArticles(response)
{
  $('#accueil #articles').append(response);
}

function htmlP(response)
{
  $('#accueil .art p').html(response);
}

function appendPost(response)
{
  $('#post main #s_post').append(response);
}

function appendComms(response)
{
  $('#s_comms').append(response);
}

function appendFormAnswer(response)
{
  $('.comm > div:last-child').append(response);
}

function hide()
{
  $('#s_comms').css('display', 'none');
  $('#show_comms button').html('Afficher');
  $('#show_comms p').html('Afficher les commentaires');
  $('#show_comms button').off();
  $('#show_comms button').on('click', show);
}

function show()
{
  $('#s_comms').css('display', 'block');
  $('#show_comms button').html('Cacher');
  $('#show_comms p').html('Cacher les commentaires');
  $('#show_comms button').off();
  $('#show_comms button').on('click', hide);
};
