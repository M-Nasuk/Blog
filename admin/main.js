$(document).ready(function () {
  //getJsonData('src/repository/select-all.php', insertJSON);
  //insertJSON();

  $.getJSON('src/repository/select-all.php').done(function() {
    for (let i of response) {
      $('<li>').append(
        'Nom : ' + response[i].firstName + ' | Phone : ' + response[i].phone
      ).appendTo('#fd ul');
    }
  })

})
