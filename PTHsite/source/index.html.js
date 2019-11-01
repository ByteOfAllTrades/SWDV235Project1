(function(){window.addEventListener('DOMContentLoaded',function(){baguetteBox.run('div.photogrid-component--flexbox-container',{filter:/.+/,ignoreClass:'no-baguette'});if(!window.__testimonials_initialized&&!window.EDIT_MODE){(function(){var els=document.querySelectorAll('div.testimonials-component--inner')
function testimonial(el){var pubMode='testimonials-component--pub'
var itemCount=Array.from(el.querySelectorAll('div.testimonials-component--each')).length
var stepSize=100/itemCount
var startIndex=0
var currentIndex
function init(){currentIndex=startIndex;el.classList.add(pubMode)
el.style.width=(100*itemCount)+'vw'}
function nextIndex(){if(currentIndex+1===itemCount){currentIndex=0}else{currentIndex++}
return currentIndex;}
function step(){var next=nextIndex();el.style.transform='translateX('+(next*stepSize*-1)+'%)'}
return{init:init,step:step}}
var testimonials=Array.from(els).map(testimonial)
testimonials.forEach(function(t){t.init();})
window.setInterval(function(){testimonials.forEach(function(t){t.step();})},5000)
window.__testimonials_initialized=true})()}});})();(function(){$(document).ready(function(){$('.chord--social-media-header__link').click(function(event){element=event.target;if(element.tagName==='I')element=element.parentElement;element.classList.add('click');removeClass=function(){element.classList.remove('click');};setTimeout(removeClass,500);});});})();(function(){(function(header_nav,$){if(!$('.js-header-init'))return;header_nav.loaded=header_nav.loaded||false;header_nav.init=function(){if(header_nav.loaded)return;events.toggleMobileNav();events.closeMobileNav();header_nav.loaded=true;}
var events={toggleMobileNav:function(){$('.js-nav-btn').on('click',function(){var $parent=$(this).closest('.nav');$('.nav__btn, .nav__links',$parent).toggleClass('is-open');});},closeMobileNav:function(){$(document).on('click','.nav__link',$('.nav__links.is-open'),function(){$('.is-open').removeClass('is-open');});}}
window.onload=header_nav.init();})(window.header_nav=window.header_nav||{},jQuery);(function(header_sticky,$){if(!$('.chord--header-sticky').length)return;header_sticky.init=function(){ui.addPadding();}
var ui={addPadding:function(){$('body').css('padding-top','66px');}}
window.onload=header_sticky.init();})(window.header_sticky=window.header_sticky||{},jQuery);(function(smooth_scroll,$){var in_editor=(window.location!=window.parent.location)?true:false;if(in_editor)return;smooth_scroll.init=function(){listeners.onLinkClick()}
var listeners={onLinkClick:function(){$('a').on('click',function(e){var target_id=$(this).attr('href');if(target_id.indexOf('#')==-1||target_id[0]!='#')return;e.preventDefault();var $nav=$('.js-sticky-nav');var nav_height=$nav.length?$nav.height():0;var page_position=target_id=='#'?0:$(target_id).offset().top-nav_height;$('body, html').animate({scrollTop:page_position},500);});}}
window.onload=smooth_scroll.init();})(window.smooth_scroll=window.smooth_scroll||{},jQuery);})();(function(){(function(header_nav,$){if(!$('.js-header-init'))return;header_nav.loaded=header_nav.loaded||false;header_nav.init=function(){if(header_nav.loaded)return;events.toggleMobileNav();events.closeMobileNav();header_nav.loaded=true;}
var events={toggleMobileNav:function(){$('.js-nav-btn').on('click',function(){var $parent=$(this).closest('.nav');$('.nav__btn, .nav__links',$parent).toggleClass('is-open');});},closeMobileNav:function(){$(document).on('click','.nav__link',$('.nav__links.is-open'),function(){$('.is-open').removeClass('is-open');});}}
window.onload=header_nav.init();})(window.header_nav=window.header_nav||{},jQuery);(function(header_sticky,$){if(!$('.chord--header-sticky').length)return;header_sticky.init=function(){ui.addPadding();}
var ui={addPadding:function(){$('body').css('padding-top','66px');}}
window.onload=header_sticky.init();})(window.header_sticky=window.header_sticky||{},jQuery);(function(smooth_scroll,$){var in_editor=(window.location!=window.parent.location)?true:false;if(in_editor)return;smooth_scroll.init=function(){listeners.onLinkClick()}
var listeners={onLinkClick:function(){$('a').on('click',function(e){var target_id=$(this).attr('href');if(target_id.indexOf('#')==-1||target_id[0]!='#')return;e.preventDefault();var $nav=$('.js-sticky-nav');var nav_height=$nav.length?$nav.height():0;var page_position=target_id=='#'?0:$(target_id).offset().top-nav_height;$('body, html').animate({scrollTop:page_position},500);});}}
window.onload=smooth_scroll.init();})(window.smooth_scroll=window.smooth_scroll||{},jQuery);})();(function(){$(document).ready(function(){$(".chord--map__map").click(function(){$(this).css("z-index",-1);});});})();