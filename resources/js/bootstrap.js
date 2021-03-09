window._ = require('lodash');


try{
    window.$ = window.jQuery = require('jquery');
    window.UIkit = require('uikit');
    window.Icons = require('uikit/dist/js/uikit-icons');

    UIkit.use(Icons);
} catch (e) {  }
