<?php
include 'splAutoloadRegister.php';

$audio1 = new AudioFile('testAudio1', 15.5, 60.2);
$audio2 = new AudioFile('testAudio2', 18.5, 63.2);
$audio3 = new AudioFile('testAudio3', 9.5, 100.2);

$video1 = new VideoFile('testVideo1', 50.2, '1920x1080', 5);
$video2 = new VideoFile('testVideo2', 20.2, '1920x1080', 5);
$video3 = new VideoFile('testVideo3', 90.2, '1920x1080', 5);

$playlist = new Playlist('playlist1');

$playlist->setListFiles($audio1);
$playlist->setListFiles($audio2);
$playlist->setListFiles($audio3);
$playlist->setListFiles($video1);
$playlist->setListFiles($video2);

$playlist->deleteListFiles('testVideo1');

foreach ($playlist->getListFiles() as $file) {
    $file->showInfo();
}



$user1 = new User('Andrey');
$user1->setListPlaylist($playlist);


