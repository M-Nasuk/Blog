$(document).ready(function () {

getData('./src/header.php', prependBody);


getData('./src/posts.php', appendArticles);

getData('./src/aside.php', appendAside);
//getData('./src/post.php', appendPost);

for (let i = 0; i < 3; i++) {
  getData('./src/comms.php', appendComms);
}

getData('./src/comm-form.php', appendFormComm);

$('#add_comm').on('click', function(){
  $('#s_comms > div').toggleClass('hide');
});


$('#show_comms button').on('click', function() {
  show();
  idDiv();
  for (let i = 0; i < $('.comm').length; i++) {
    $(`button#${i}.answer`).on('click', displayForm);
  }
});


$( "body" ).click(function( event ) {
  console.log(event.target.id )});


getData('./src/log.php', prependBody);

})
