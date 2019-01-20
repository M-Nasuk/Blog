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
