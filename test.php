
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L5Q6D7BH8N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L5Q6D7BH8N');
</script>

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

    <form action="" method="get">
<input type="button" value="Hey" onclick="dataLayer.push({'event': 'IamClickTestEvent'});">

<button id="addToCart">addToCart</button>
    </form>
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
});


    </script>
</body>
</html>