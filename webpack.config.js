const path = require('path');

module.exports = {
  entry: './assets/js/ES6/aw-main.js',
  output: {
    path: path.resolve(__dirname, 'assets/js/dist'),
    filename: 'adw-bundle.js'
  },
};


