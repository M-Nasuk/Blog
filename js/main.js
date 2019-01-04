$(document).ready(function () {

getData('./header.php', prependBody);
for (let i = 0; i < 5; i++) {
  getData('./post-desc.php', htmlP);
  getData('./post.php', prependMain);
}
getData('./post.php', appendSection);



})
