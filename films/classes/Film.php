<?php

class Film {

    function __construct(
        private ?int $id,
        private string $title,
        private string $resume,
        private string $genre
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

    function setTitle (int $title) {
        $this->title = $title;
    }

    function getResume() {
        return $this->resume;
    }

    function setResume (int $resume) {
        $this->resume = $resume;
    }

    function getGenre() {
        return $this->genre;
    }

    function setGenre (int $genre) {
        $this->genre = $genre;
    }
}