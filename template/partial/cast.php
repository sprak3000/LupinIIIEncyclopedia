<?php
if (isset($annData) && !empty($annData['anime']['cast'])) {
?>
<dl class="dl-horizontal">
<?php
    foreach ($annData['anime']['cast'] as $index => $cast) {
        if (!is_numeric($index)) {
            continue;
        }
        if ('JA' === $cast['@attributes']['lang']) {
?>
    <dt><?php echo $cast['role'];?>:</dt>
            <dd><a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/people.php?id=<?php echo $cast['person']['@attributes']['id']; ?>"><?php echo $cast['person']['value'];?></a></dd>
<?php
        }
    }
?>
</dl>
<?php
}
?>
<p>
    Cast data provided by <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/">Anime News Network.</a>
    Check their <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=<?php echo $annData['anime']['@attributes']['id'];?>">official page</a> for any additional data not supplied through their API.
</p>

