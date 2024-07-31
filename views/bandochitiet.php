<?php
$html_showallbando=show_bando($dsbd);
extract($bdct)

?>
<main>
        <div class="row">
            <div class="top container">
                <h1 class="h1namemap"><?=$name?></h1>
                <div class="anhchitiet">
                    <img src="img/<?=$image?>" width="100%" height="100%">
                </div>
                <p class="chitiet-tt"><?=$moTa?></p>
                <div class="row">
                    <div class="top container">
                        <div class="container-bd">
                            <h2 class="bd">Bản đồ <i class="fa-solid fa-chevron-right fa-sm" style="color: #261A1A;"></i></h2>
            
                            <div class="data">
                            <?=$html_showallbando?>
                            </div>
                        </div>
                    </div>
                   </div> 
            </div>
        </div>
    </main>