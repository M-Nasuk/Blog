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

function displayForm(event){
  $(`.comm#${event.target.id} .d_button > div`).toggleClass('hide');
  $(`.comm:not(.comm#${event.target.id}) .d_button > div`).addClass('hide');
}


function idDiv()
{
  let w = 0;
  for (let i of document.querySelectorAll('.comm')){
    i.id = w;
    w++;
  }
  
  let y = 0;
  for (let i of document.querySelectorAll('.comm .d_button .answer')) {
    i.id = y;
    y++;
  }
}
