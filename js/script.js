function prependBody(response)
{
  $('body').prepend(response);
}

function prependBodyLog(response)
{
  $('#blog_logged)').prepend(response);
}

function appendArticles(response)
{
  $('#articles').append(response);
}

function prependInscri(response)
{
  $('main:not(.no_signin_link').prepend(response);
}

function appendPost(response)
{
  $('#post main #s_post').append(response);
}

function appendResult(response)
{
  $('#result main > section').append(response);
}

function appendAside(response)
{
  $('aside').append(response);
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
