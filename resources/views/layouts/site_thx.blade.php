<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Спасибо за регистрацию! </title>
    <meta name="description" content="Спасибо за регистрацию! " />
    <meta name="keywords" content="Спасибо за регистрацию! "/>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="{{asset ('assets/img/favicon2.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{asset ('assets/img/favicon2.ico') }}" type="image/x-icon">
    <link href=" {{asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
@yield('content')


<script src="{{asset ('assets/vendor/jquery-1.11.3.min.js') }}"></script>
{{--<!-- Include all compiled plugins (below), or include individual files as needed -->--}}
<script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
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
<!-- wepster init code -->
<script>
    window.leeloo = function(){
        (function(d, s){
            var js = d.createElement(s);
            window.WepsterInit = {
                service_url: 'https://app.leeloo.ai',
                short_url: 'https://wep.wf'};
            js.src = 'https://app.leeloo.ai/init.js';
            document.getElementsByTagName('head')[0].appendChild(js);
        }(document, 'script'));
    };
    leeloo();
</script>
<!-- end wepster init code -->
</body>