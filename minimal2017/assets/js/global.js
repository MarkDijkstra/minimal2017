/*
 * Name       : Minimal 2017
 * Date       : January 2017
 * Owner      : Mark Dijkstra
 * Url        : http://www.markdijkstra.eu
 * Version    : 0.0.1
 * Updated    : 2017-01-29 17:12:30 UTC+02:00
 * Developer  : Mark
 * Dependency : none
 * Lib        : jQuery 1.7+(optional)
 */


var DOMReady = function(a,b,c){b=document,c='addEventListener';b[c]?b[c]('DOMContentLoaded',a):window.attachEvent('onload',a)}

DOMReady(function (){
 
    var bd = document.querySelector('body');

    /**
    * Javascript functions.
    * 
    * Some js functions to help us. With old shitty 
    * browsers fallbacks.
    *
    * Since   : 0.0.1
    * Version : 0.0.1
    */ 
 
    function hasClass(el, className){
       if (el.classList){
           return el.classList.contains(className);
       }else{
           return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
       }
    }

    function addClass(el, className){
        if (el.classList){
            el.classList.add(className);
        }else if (!hasClass(el, className)){ 
            el.className += " " + className
        }
    }

    function removeClass(el, className){
        if (el.classList){
            el.classList.remove(className)
        }else if (hasClass(el, className)) {
           var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
           el.className=el.className.replace(reg, ' ');
        }
    } 

    /**
    * Shows/hides the hidden menu.
    * 
    * When clicking on the hamburger icon it will trigger 
    * the hidden menu located at the top of the page.
    *
    * Since   : 0.0.1
    * Version : 0.0.1
    */ 

    document.getElementById('hamburger').onclick = function(event){
      
        var menu = 'show-menu';

        if(hasClass(bd , menu)){        
        
            removeClass(bd , menu);
    
        }else{
        
            addClass(bd , menu);
        
        }
       
        //document.querySelector('body').classList.remove('fadeineffect');
       
        event.preventDefault();

    }
    
    setTimeout(function(){
        
        removeClass(bd , 'fadeineffect');
        
    },400);

});

/*
$(document).ready(function($){	

	$('body').on('click' , '.hamburger',  function(e){

		$('body').toggleClass('show-menu');
		
		e.preventDefault();
		
	});
     
    setTimeout(function(){
       
        $('body').removeClass('fadeineffect');
     
    },600);

});

*/