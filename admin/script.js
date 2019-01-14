function getJsonData(link, func)
{
  $.getJSON(link)
  .done(func);
}

function insertJSON(response)
{
  $('#fd').html('<ul>');
  $('<li>').html(response).appendTo('#fd > ul');


/*
  for (let i = 0; i < response.length; i++) {
    $('<li>').append(
      'Nom : ' + response[i].firstName + ' | Phone : ' + response[i].phone
    ).appendTo('#d_show ul');
  }*/
}
