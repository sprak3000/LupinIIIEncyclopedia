<?php
if (isset($annData) && !empty($annData['anime']['staff'])) {
?>
<dl class="dl-horizontal">
<?php
    foreach ($annData['anime']['staff'] as $index => $staff) {
        if (!is_numeric($index)) {
            continue;
        }
?>
    <dt><?php echo $staff['task'];?>:</dt>
            <dd><a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/people.php?id=<?php echo $staff['person']['@attributes']['id']; ?>"><?php echo $staff['person']['value'];?></a></dd>
<?php
    }
?>
</dl>
<?php
}
?>
<p>
    Staff data provided by <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/">Anime News Network.</a>
    Check their <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=<?php echo $annData['anime']['@attributes']['id'];?>">official page</a> for any additional data not supplied through their API.
</p>

