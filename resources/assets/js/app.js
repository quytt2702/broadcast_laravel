require('./bootstrap');

const pathname = window.location.pathname;

if (/^\/admin$/.test(pathname)) {
  require('./pages/admin');
}

if (/^\/user\/[0-9]+$/.test(pathname)) {
  require('./pages/user');
}
