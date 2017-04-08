$(document).ready(function(){

  var clicked = 0;
  var mouse = 0;
  var scroll = 0;

  $(".single-project").click(function(e){
		e.preventDefault();
		// console.log("J'ai cliqué");
    if (clicked === 0) {
      $(window).scrollTop(0);
			/////////////////////////////////////////////////////////////////
			$(".single-project").css("position","absolute");
			var singleProjectCss = {
				opacity : "0",
				display : "none",
			};
			// console.log(singleProjectCss);
      $(".single-project").not(this).css( singleProjectCss );
			/////////////////////////////////////////////////////////////////
			var thisCss = {
				height: "100%",
				top: "0",
			};
      $(this).css( thisCss );
			/////////////////////////////////////////////////////////////////
			var projectInfoCss = {
				opacity: '1',
				height: "auto",
			};
      $(".project-info").css( projectInfoCss );
			/////////////////////////////////////////////////////////////////
			var menuCss = {
				backgroundImage: "url(wp-content/themes/themeportfolio-master/assets/images/back.png)",
				width: "50px",
				height: "50px",
			};
      $(".menu").css( menuCss );
			/////////////////////////////////////////////////////////////////
      $("h2").css("margin-top", "450px");
      $(".overlay").css("height", "0");
      $("header").css("display", "none");
      $(".about").css("display", "none");
			mouse = 1;
			clicked = 1;
			scroll = 1;
    }
  }); /* .single-project */

  $(".menu").click(function(e){
		e.preventDefault();
    if (mouse === 0) {
      $(this).css("background-image", "url(wp-content/themes/themeportfolio-master/assets/images/cross.png)");
      $(".menu-closed").slideToggle("slow");
      mouse = 2;
    }
    else if (mouse == 2) {
      $(this).css("background-image", "url(wp-content/themes/themeportfolio-master/assets/images/menu.png)");
      $(".menu-closed").slideToggle("slow");
			mouse = 0;
    }
    else if (mouse == 1){
			var singleProjectCss = {
				height : "33.333%",
				position : "relative",
				opacity : "1",
				display : "block"
			};
			$(".single-project").css( singleProjectCss );
      $(".project-info").css("opacity", "0").css("height", "0");
      $(".menu").css("background-image", "url(wp-content/themes/themeportfolio-master/assets/images/menu.png)").css("width", "30px").css("height", "30px");
      $("h2").css("margin-top", "100px");
      $(".overlay").css("height", "auto");
      $("header").css("display", "block");
      $(".about").css("display", "block");
			mouse = 0;
			clicked = 0;
			scroll = 0;
    }
    else {
      return false;
    }
  }); /* .menu */



  (function() {
    var delay = false;

    $(document).on('mousewheel DOMMouseScroll', function(event) {
      if(scroll === 0) {
      event.preventDefault();
      if(delay) return;

      delay = true;
      setTimeout(function(){delay = false},200);

      var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

      var a= $('.scroll-anchor');
      if(wd < 0) {
        for(var i = 0 ; i < a.length ; i++) {
          var t = a[i].getClientRects()[0].top;
          if(t >= 40) break;
        }
      }
      else {
        for(var i = a.length-1 ; i >= 0 ; i--) {
          var t = a[i].getClientRects()[0].top;
          if(t < -20) break;
        }
      }
      $('html,body').animate({
        scrollTop: a[i].offsetTop
      });
    }
    });
  })(); /* scroll */
});
