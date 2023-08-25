import './bootstrap';
import 'bootstrap'; // Asegúrate de que bootstrap esté importado
import 'toastr/build/toastr.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// resources/js/app.js
window.toastr = require('toastr');

