/*
 * blueimp Gallery Demo JS
 * https://github.com/blueimp/Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

/* global blueimp, $ */

$(function () {
  'use strict'

  // Flickr image types:
  var imageTypes = [
    // https://www.flickr.com/services/api/misc.urls.html
    'sq', // 75x75
    'q', // 150x150
    't', // 100 on longest side
    's', // 240 on longest side
    'n', // 320 on longest side
    'm', // 500 on longest side
    'z', // 640 on longest side
    'c', // 800 on longest side
    'l', // 1024 on longest side
    'h', // 1600 on longest side
    'k', // 2048 on longest side
    'o' // original dimensions
  ]

  // Load demo images from Flickr:
  $.ajax({
    url: 'http://localhost:8000/getFotos/'+$("#id_momento").val(),
  }).done(function (result) {
   
    var maxWidth = $(document.body).css('max-width')
    var sizes = '(min-width: ' + maxWidth + ') ' + maxWidth + ', 100vw'
    var carouselLinks = []
    var linksContainer = $('#links')
    // Add the demo images as links with thumbnails to the page:
    $.each(result, function (_, photo) {
      
      var thumbnail = $('<img>')
        .prop('loading', 'lazy')
        .prop('width', photo.width_t)
        .prop('height', photo.height_t)
        .prop('src', photo.foto)
        .prop('alt', photo.title)
      var srcset = []
      $.each(imageTypes, function (_, type) {
       
        var url = photo.foto;
        
        var width = photo['width_' + type]
        
        if (url) {
          srcset.push(url + ' ' + width + 'w')
        }
      })
      srcset = srcset.join(',')
      $('<a></a>')
        .append(thumbnail)
        .prop('title', photo.texto)
        .prop('href', photo.foto)
        .attr('data-srcset', srcset)
        .attr('data-gallery', '')
        .appendTo(linksContainer)
      carouselLinks.push({
        title: photo.texto,
        href: photo.foto,
        sizes: sizes,
        srcset: srcset
      })
    })
    
  })

  // Initialize the Gallery as video carousel:
  // eslint-disable-next-line new-cap
 

  
})
