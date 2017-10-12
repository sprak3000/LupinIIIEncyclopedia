<?php
if (isset($annData) && !empty($annData['anime']['cast'])) {
?>
<div class="cast-grid margin-bottom-20">
<?php
    foreach ($annData['anime']['cast'] as $index => $cast) {
        if (!is_numeric($index)) {
            continue;
        }
        if ('JA' === $cast['@attributes']['lang']) {
?>
    <div class="title"><?php echo $cast['role'];?>:</div>
    <div class="person"><a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/people.php?id=<?php echo $cast['person']['@attributes']['id']; ?>"><?php echo $cast['person']['value'];?></a></div>
<?php
        }
    }
?>
</div>
<?php
}
?>
<p>
    Cast data provided by <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/">Anime News Network.</a>
    Check their <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=<?php echo $annData['anime']['@attributes']['id'];?>">official page</a> for any additional data not supplied through their API.
</p>

