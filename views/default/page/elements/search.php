<?php
$site_name = elgg_get_site_entity()->name;
$action = elgg_get_site_url() ."videos/youtube";
$search_videos = elgg_echo('videos:search:videos');
$search = elgg_echo('videos:search');

$htmlBody = <<<END
<a href="/videos/all" title="Watch videos on $site_name ">
<img alt="Videos on '. $site_name . ' " height="36" src="/_graphics/favicon.png" width="36" align="left"></a>
<a href="https://www.youtube.com" title="Powered by Youtube"><img alt="Youtube Logo" height="36" src="/mod/videos/graphics/youtube.jpg" width="36" align="right"></a>
<br>
<form action="$action" method="GET">
  <div>
    <b><center>$search_videos:</center></b><br> <input type="search" id="q" name="q" placeholder="$search_videos">
  </div>
  <div>
    Results (max 10): <input type="number" id="maxResults" name="maxResults" min="1" max="10" step="1" value="5">
    <br><br>
   </div>
  <input type="submit" value="$search" class="elgg-button elgg-button-submit">
  <br><br>
</form>
END;

echo $htmlBody;

