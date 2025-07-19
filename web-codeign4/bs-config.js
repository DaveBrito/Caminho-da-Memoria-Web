const browserSync = require('browser-sync').create();

browserSync.init({
  proxy: "localhost:8080", // Porta do spark serve
  files: [
    "app/Views/**/*.php",
    "public/**/*.css",
    "public/**/*.js"
  ],
  injectChanges: true,
  open: true,
  notify: false,
  reloadDelay: 500,
  port: 3000
});
