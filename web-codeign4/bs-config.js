module.exports = {
    proxy: "localhost:8080", // Porta usada pelo 'php spark serve'
    files: [
        "app/Views/**/*.php",  // Arquivos de visualização
        "public/**/*.css",     // CSS
        "public/**/*.js"       // JS
    ],
    injectChanges: true,
    open: true,
    notify: false,
    reloadDelay: 500
};
