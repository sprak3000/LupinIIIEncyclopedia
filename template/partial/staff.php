<?php
if (isset($annData) && !empty($annData['calculated']['staff'])) {
?>
<div class="staff-grid margin-bottom-20">
<?php
    foreach ($annData['calculated']['staff'] as $index => $staff) {
?>
    <div class="title"><?php echo $index;?>:</div>
<?php
        foreach ($staff as $person) {
?>
    <div class="person"><a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/people.php?id=<?php echo $person['@attributes']['id']; ?>"><?php echo $person['value'];?></a></div>
<?php
        }
    }
?>
</div>
<?php
}
?>
<p>
    Staff data provided by <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/">Anime News Network.</a>
    Check their <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=<?php echo $annData['anime']['@attributes']['id'];?>">official page</a> for any additional data not supplied through their API.
</p>

