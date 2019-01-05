function getData(link, func)
{
  $.get(link)
  .done(func);
}

function prependBody(response)
{
  $('body').prepend(response);
}

function appendMain(response)
{
  $('#accueil main').append(response);
}

function htmlP(response)
{
  $('#accueil .art p').html(response);
}

function appendSection(response)
{
  $('#post main #s_post').append(response);
}

function appendSection(response)
{
  $('#post main #s_comms').append(response);
}
