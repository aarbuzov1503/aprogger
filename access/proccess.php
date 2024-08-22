<!DOCTYPE html>
<html lang="ru">
    <head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(96505463, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/96505463" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
        <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

h1 {
    font-size: 24px;
}

p {
    margin-top: 10px;
    font-size: 14px;
}

img {
    margin-top: 20px;
}

        </style>
                <!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
    </head>
    <body class="section-body">     
  <?php
    $timer = 120; // начальное значение таймера
?>
        <p>Вы будете автоматически перенаправлены на новый сайт через <span id="timer"><?php echo $timer; ?> секунд.</p>
        <img style="width:120px; height:50px;" src="loading.gif" alt="Loading">
<!-- Yandex.RTB R-A-6902447-2 -->
<div style="width:100%;height:900px;" id="yandex_rtb_R-A-6902447-2"></div>
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-6902447-2",
		"renderTo": "yandex_rtb_R-A-6902447-2"
	})
})
</script>
<script>
  var timer = <?php echo $timer; ?>;
  var timerElement = document.getElementById('timer'); // элемент, содержащий значение таймера

  function countdown() {
    timer--;

    // обновляем значение таймера на странице
    timerElement.textContent = timer;

    if (timer <= 0) {
      window.location = 'https://aprogger.ru/access/end'; // перенаправляем на страницу регистрации пользователей
    } else {
      setTimeout(countdown, 1000); // обновляем таймер каждую секунду
    }
  }

  // запускаем таймер при загрузке страницы
  setTimeout(countdown, 1000);
</script>
<!-- Yandex.RTB R-A-2587095-7 -->
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-2587095-7",
		"type": "floorAd",
		"platform": "desktop"
	})
})
</script>
        </body>
    </html>        
      