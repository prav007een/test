!function(a){"use strict";for(var e=a(".slick1").find(".item-slick1"),i=[],t=[],s=[],r=[],l=[],o=[],n=0;n<e.length;n++)r[n]=a(e[n]).find(".caption1-slide1"),l[n]=a(e[n]).find(".caption2-slide1"),o[n]=a(e[n]).find(".wrap-btn-slide1");a(".slick1").on("init",function(){i[0]=setTimeout(function(){a(r[0]).addClass(a(r[0]).data("appear")+" visible-true")},200),t[0]=setTimeout(function(){a(l[0]).addClass(a(l[0]).data("appear")+" visible-true")},1e3),s[0]=setTimeout(function(){a(o[0]).addClass(a(o)[0].data("appear")+" visible-true")},1800)}),a(".slick1").slick({slidesToShow:1,slidesToScroll:1,fade:!0,dots:!0,appendDots:a(".wrap-slick1-dots"),dotsClass:"slick1-dots",infinite:!0,autoplay:!0,autoplaySpeed:6e3,arrows:!0,appendArrows:a(".wrap-slick1"),prevArrow:'<button class="arrow-slick1 prev-slick1"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',nextArrow:'<button class="arrow-slick1 next-slick1"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'}),a(".slick1").on("afterChange",function(n,d,u){for(var c=0;c<e.length;c++)clearTimeout(i[c]),clearTimeout(t[c]),clearTimeout(s[c]),a(r[c]).removeClass(a(r[c]).data("appear")+" visible-true"),a(l[c]).removeClass(a(l[c]).data("appear")+" visible-true"),a(o[c]).removeClass(a(o[c]).data("appear")+" visible-true");i[u]=setTimeout(function(){a(r[u]).addClass(a(r[u]).data("appear")+" visible-true")},200),t[u]=setTimeout(function(){a(l[u]).addClass(a(l[u]).data("appear")+" visible-true")},1e3),s[u]=setTimeout(function(){a(o[u]).addClass(a(o)[u].data("appear")+" visible-true")},1800)});var d=a(".item-slick2"),u=[],c=[];for(n=0;n<d.length;n++)c[n]=a(d[n]).find(".wrap-content-slide2 .blo2");a(".slick2").on("init",function(){u[0]=setTimeout(function(){a(c[0]).addClass(a(c[0]).data("appear")+" visible-true")},200)}),a(".slick2").slick({slidesToShow:1,slidesToScroll:1,fade:!0,dots:!0,appendDots:a(".wrap-slick2-dots"),dotsClass:"slick2-dots",infinite:!0,autoplay:!0,autoplaySpeed:6e3,arrows:!0,appendArrows:a(".wrap-slick2"),prevArrow:'<button class="arrow-slick2 prev-slick2"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',nextArrow:'<button class="arrow-slick2 next-slick2"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'}),a(".slick2").on("afterChange",function(e,i,t){for(var s=0;s<d.length;s++)clearTimeout(u[s]),a(c[s]).removeClass(a(c[s]).data("appear")+" visible-true");u[t]=setTimeout(function(){a(c[t]).addClass(a(c[t]).data("appear")+" visible-true")},200)});var p=a(".slick3").find(".item-slick3"),f=[],v=[],k=[],b=[],m=[],w=[];for(n=0;n<p.length;n++)b[n]=a(p[n]).find(".pic-review"),m[n]=a(p[n]).find(".content-review"),w[n]=a(p[n]).find(".more-review");a(".slick3").on("init",function(){f[0]=setTimeout(function(){a(b[0]).addClass(a(b[0]).data("appear")+" visible-true")},200),v[0]=setTimeout(function(){a(m[0]).addClass(a(m[0]).data("appear")+" visible-true")},1e3),k[0]=setTimeout(function(){a(w[0]).addClass(a(w)[0].data("appear")+" visible-true")},1e3)}),a(".slick3").slick({slidesToShow:1,slidesToScroll:1,fade:!1,dots:!0,appendDots:a(".wrap-slick3-dots"),dotsClass:"slick3-dots",infinite:!0,autoplay:!0,autoplaySpeed:6e3,arrows:!0,appendArrows:a(".wrap-slick3"),prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'}),a(".slick3").on("afterChange",function(e,i,t){for(var s=0;s<p.length;s++)clearTimeout(f[s]),clearTimeout(v[s]),clearTimeout(k[s]),a(b[s]).removeClass(a(b[s]).data("appear")+" visible-true"),a(m[s]).removeClass(a(m[s]).data("appear")+" visible-true"),a(w[s]).removeClass(a(w[s]).data("appear")+" visible-true");f[t]=setTimeout(function(){a(b[t]).addClass(a(b[t]).data("appear")+" visible-true")},200),v[t]=setTimeout(function(){a(m[t]).addClass(a(m[t]).data("appear")+" visible-true")},1e3),k[t]=setTimeout(function(){a(w[t]).addClass(a(w)[t].data("appear")+" visible-true")},1e3)})}(jQuery);