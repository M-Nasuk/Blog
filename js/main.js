$(document).ready(function () {

getData('./header.php', prependBody);

for (let i = 0; i < 5; i++) {

  getData('./post.php', appendMain);
  getData('./post-desc.php', htmlP);

}

getData('./post.php', appendSection);


})
