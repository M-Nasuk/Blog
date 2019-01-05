$(document).ready(function () {

getData('./src/header.php', prependBody);

for (let i = 0; i < 5; i++) {
  getData('./src/post.php', appendArticles);
  getData('./src/post-desc.php', htmlP);
}

getData('./src/post.php', appendPost);

for (let i = 0; i < 3; i++) {
  getData('./src/comms.php', appendComms);
}

})

$('#show_comms button').on('click', function () {
  $('#s_comms').css('display', 'block');
});
