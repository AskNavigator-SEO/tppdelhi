
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P8DDNB8');</script>
<!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8DDNB8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    Hello


<button id="addToCart">addToCart</button>

<a id="link" href="#">I am Link </a>
   
    <script>
      document.getElementById("addToCart").addEventListener("click", function () {

gtag("event", "Hello", {
  currency: "USD",
  value: 7.77,
  items: [
    {
      item_id: "SKU_12345",
      item_name: "Stan and Friends Tee",
    }
  ]
});
gtag('event', 'testinnnnn', {
  'app_name': 'myAppName',
  'screen_name': 'Home'
});
});

document.getElementById("link").addEventListener("click", function () {

gtag("event", "linkclick", {
  currency: "USD",
  value: 7.77,
  items: [
    {
      item_id: "SKU_12345",
      item_name: "Stan and Friends Tee",
    }
  ]
});
gtag('event', 'linkclick', {
  'app_name': 'myAppName',
  'screen_name': 'Home'
});
});

 window.dataLayer = window.dataLayer || [];
 window.dataLayer.push({
 'event': 'registrationComplete',
 'registrationCountry': 'United States',
 'plan': 'Premium'
 });

 dataLayer.push({'event':'button1-click','conversionValue':25});

 dataLayer.push({'only data':25});

 gtag('set', 'user_properties', {
  favorite_composer: 'Mahler',
  favorite_instrument: 'double bass',
  season_ticketholder: 'true'
});

gtag('event', 'linkclick', {
  'app_name': 'myAppName',
  'screen_name': 'Home'
});

    </script>
</body>
</html>