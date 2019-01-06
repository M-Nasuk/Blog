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

function displayAnswerForm()
{
  $('.comm .d_button div').toggleClass('hide');
}

function idDiv()
{
  let x = 0;
  for (let i of document.querySelectorAll('.d_button div')){
    i.dataset.index = x;
    x++;
  }
}
