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

function appendFormComm(response)
{
  $('#add_comm').after(response);
}

function appendFormAnswer(response)
{
  $('.comm .d_button button').after(response);
}


function displayAnswerForm(event)
{
  if (event.target.id == $('.d_button div')[event.target.id].id){
    $(`.d_button div#${event.target.id}`).toggleClass('selected');
  }
  $(`.d_button div:not(#${event.target.id})`).addClass('selected');
}

function idDiv()
{
  let x = 0;
  for (let i of document.querySelectorAll('.d_button div')){
    i.dataset.index = x;
    i.id = x;
    x++;
  }
  let y = 0;
  for (let i of document.querySelectorAll('.comm .d_button .answer')) {
    i.dataset.index = y;
    i.id = y;
    y++;
  }
}
