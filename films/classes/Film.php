<?php

class Film {

    function __construct(
        private ?int $id,
        private string $title,
        private string $resume,
        private string $genre,
        private ?string $image
    )
    {}

    function getId() {
        return $this->id;
    }

    function setId (int $id) {
        $this->id = $id;
    }

    function getTitle() {
        return $this->title;
    }

    function setTitle (string $title) {
        $this->title = $title;
    }

    function getResume() {
        return $this->resume;
    }

    function setResume (string $resume) {
        $this->resume = $resume;
    }

    function getGenre() {
        return $this->genre;
    }

    function setGenre (string $genre) {
        $this->genre = $genre;
    }

    function getImage() {
        return $this->image;
    }

    function setImage (string $image) {
        $this->image = $image;
    }
}