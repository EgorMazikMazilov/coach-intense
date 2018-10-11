<!DOCTYPE html>
<html>
<head>
   @yield('head')
</head>

<body>
@yield('menu')
@yield('content')

{{--<!-- >> JS
============================================================================== -->--}}
<script src="{{asset ('assets/vendor/countdown.js') }}" type="text/javascript"></script>
{{--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->--}}
<script src="{{asset ('assets/vendor/jquery-1.11.3.min.js') }}"></script>
{{--<!-- Include all compiled plugins (below), or include individual files as needed -->--}}
<script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
{{--<!-- Crossbrowser-->--}}
<script src="{{asset ('assets/vendor/cross-browser.js') }}"></script>
{{--<!-- /Crossbrowser-->--}}
{{--<!-- CountDown -->--}}
<script src="{{asset ('assets/vendor/jquery.countdown.min.js') }}"></script>
{{--<!-- /CountDown -->--}}
{{--<!-- Waypoints-->--}}
<script src="{{asset ('assets/vendor/waypoints.min.js') }}"></script>
{{--<!-- /Waypoints-->--}}
{{--<!-- Validate -->--}}
<script src="{{asset ('assets/vendor/validate.js') }}"></script>
{{--<!-- / Validate -->--}}
{{--<!-- Fancybox -->--}}
<script src="{{asset ('assets/vendor/fancybox/jquery.fancybox.js') }}"></script>
{{--<!-- /fancybox -->--}}
<script src="{{asset ('assets/js/circle-progress.js') }}"></script>
{{--<!-- Owl Caroulsel -->--}}
<script src="{{asset ('assets/vendor/owl.carousel/owl-carousel/owl.carousel.js') }}"></script>
{{--<!-- /Owl Caroulsel -->--}}
<script src="{{asset ('assets/vendor/flexslider/jquery.flexslider-min.js') }}"></script>
{{--<!-- Main JS -->--}}
<script src="{{asset ('assets/js/main.js') }}"></script>
{{--<!-- /Main JS -->--}}

{{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->--}}

{{--<!-- >> /JS
============================================================================= -->--}}
<!-- fb social-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- //fb social-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96327684-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43782434 = new Ya.Metrika({
                    id:43782434,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43782434" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1444472129216065');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1444472129216065&ev=PageView&noscript=1"/>
</noscript>
</body>
</html>