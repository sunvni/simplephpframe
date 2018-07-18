<?php
$js = <<<JS
<script>
window.addEventListener("load",e=>{    
      if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register('./sw.js')
      }
      const menu = document.querySelectorAll("menuitem");
        menu.forEach( element => {
                element.addEventListener('click',e=>{
                alert("ok");
            })  
        });
})

</script>
JS;

echo compressJs($js);