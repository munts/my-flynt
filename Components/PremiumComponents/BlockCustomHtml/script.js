import { $, jQuery } from 'jquery'
// export for others scripts to use
window.$ = $
window.jQuery = jQuery

function doADocDotWrite () { // eslint-disable-line no-unused-vars
  document.write('This is a warning message!')
}
