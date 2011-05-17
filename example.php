<?php

$s = new Spotify("spotify_appkey.key", "user", "pass");

//$f = $s->getStarredPlaylist();
//var_dump($f->getTracks());

$playlists = $s->getPlaylists();

$pl = $playlists[7];

printf("\tPlaylist name: %s\n", $pl);
printf("\tOwner: %s\n", $pl->getOwner());

//if (!$playlists[7]->rename("hove 2010")) {
//	printf("rename failed\n");
//}

echo "\n";

$tracks = $playlists[7]->getTracks();
foreach ($tracks as $track) {
	$duration = $track->getDuration();
	printf("%s - %s (album: %s, #%d) [%02d:%02d] %s [%d%%]\n",
			$track->getArtist(),
			$track,
			$track->getAlbum(),
			$track->getIndex(),
			$duration / 60,
			$duration % 60,
			$track->isStarred() ? '*' : '',
			$track->getPopularity()
			);
}

