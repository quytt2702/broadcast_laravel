(function () {

  const USER_ID = document.getElementById('user_id').value;

  console.log(`Channel: users.${USER_ID}`);

  Echo
    .private(`users.${USER_ID}`)
    .listen('OrderShipped', function (e) {
      console.log(e);
    });

})();
