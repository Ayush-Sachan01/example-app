<?php

class Song {
    //Following are various properties of Song
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Getter and setter for title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and setter for artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and setter for genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and setter for tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

// Creating an instance of the Song class
$track1 = new Song();

// Setting values using setter methods
$track1->setTitle("ABC SONG");
$track1->setArtist("Eminem");
$track1->setGenre("Jazz");
$track1->setTempo("70 BPM");

// Displaying information
echo "Title of the song is: {$track1->getTitle()} \n";
echo "Artist of the song is: {$track1->getArtist()} \n";
echo "Genre of the song is: {$track1->getGenre()} \n";
echo "Tempo of the song is: {$track1->getTempo()} \n";

?>
