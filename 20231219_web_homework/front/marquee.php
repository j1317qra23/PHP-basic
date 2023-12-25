<marquee scrolldelay="150" direction="left" style="width:100%; top:75%;height:40px; font-size: 35px">
    <?php
        $ads=$Ad->all(['sh'=>1]);
        foreach($ads as $ad){
            echo $ad['text'];
            echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
        }

    ?>
    </marquee>