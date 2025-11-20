<div>
    <ol>

        <?php foreach($content as $pageLink):?>
            <li><a href="/test/<?=$pageLink['id']?>/"><?=$pageLink['text']?></a></li>
        <?php endforeach?>
    </ol>
</div>