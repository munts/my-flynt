import './scripts/publicPath'
import 'console-polyfill'
import 'normalize.css/normalize.css'
import './main.scss'
import $ from 'jquery'
import feather from 'feather-icons'
import GLightbox from 'glightbox'

import installCE from 'document-register-element/pony'

window.jQuery = $

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')

// Header scroll function

$(window).scroll(function () {
  var scroll = $(window).scrollTop()
  if (scroll > 100) {
    // $('header').addClass('mainHeaderFixed')
    $('#menuWrapper').addClass('containerScrolled')
    $('#logo').addClass('logoScrolled')
    $('.menu-link').addClass('menu-link-scrolled')
  } else {
    // $('header').removeClass('mainHeaderFixed')
    $('#menuWrapper').removeClass('containerScrolled')
    $('#logo').removeClass('logoScrolled')
    $('.menu-link').removeClass('menu-link-scrolled')
  }
})

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
})

$(function (event) {
  const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    onOpen: () => {
      console.log(lightbox + 'Lightbox opened')
    }
  })
})

$('ul.menu li:has(ul.nav-drop)').hover(function () {
  $(this).children('a').click(function () {
    return false
  })
})

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

importAll(require.context('../Components/', true, /\/script\.js$/))
