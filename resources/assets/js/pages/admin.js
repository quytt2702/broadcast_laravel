(function () {

  console.log('Channel: admin');

  window.Echo
    .private('admin')
    .listen('OrderShipped', function (e) {
      console.log(e);
    });

})();
