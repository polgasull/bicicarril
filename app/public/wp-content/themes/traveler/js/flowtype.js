(function($){$.fn.flowtype=function(options){var settings=$.extend({maximum:9999,minimum:1,maxFont:9999,minFont:1,fontRatio:35},options),changes=function(el){var $el=$(el),elw=$el.width(),width=elw>settings.maximum?settings.maximum:elw<settings.minimum?settings.minimum:elw,fontBase=width/settings.fontRatio,fontSize=fontBase>settings.maxFont?settings.maxFont:fontBase<settings.minFont?settings.minFont:fontBase;$el.css('font-size',fontSize+'px')};return this.each(function(){var that=this;$(window).resize(function(){changes(that)});changes(this)})}}(jQuery))