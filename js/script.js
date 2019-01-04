function getData(link, func)
{
  $.get(link)
  .done(func);
}

function prependBody(response)
{
  $('body').prepend(response);
}

function prependMain(response)
{
  $('#accueil main').prepend(response);
}

function appendSection(response)
{
  $('#post main section').append(response);
}

function htmlP(response)
{
  $('#accueil .art p').html(response);
}
