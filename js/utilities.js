function getData(link, func)
{
  $.get(link)
  .done(func);
}

function hide()
{
  $('#s_comms').css('display', 'none');
  $('#show_comms button').html('Afficher les commentaires');
  $('#show_comms button').off();
  $('#show_comms button').on('click', show);
}

function show()
{
  $('#s_comms').css('display', 'block');
  $('#show_comms button').html('Cacher les commentaires');
  $('#show_comms button').off();
  $('#show_comms button').on('click', hide);
};
