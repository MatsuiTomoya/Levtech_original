//import './bootstrap';
require('./bootstrap');

window.axios = require("axios");

require('./calendar');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
