$(document).ready(function () {

getData('./src/header.php', prependBody);
getData('./src/log.php', prependBody);

for (let i = 0; i < 5; i++) {
  getData('./src/post.php', appendArticles);
  getData('./src/post-desc.php', htmlP);
}

getData('./src/post.php', appendPost);

for (let i = 0; i < 3; i++) {
  getData('./src/comms.php', appendComms);
}

getData('./src/comm-form.php', appendFormComm);

$('#add_comm').on('click', function(){
  $('#s_comms > div').toggleClass('hide');
});


$('#show_comms button').on('click', function() {show(); idDiv();});




})
