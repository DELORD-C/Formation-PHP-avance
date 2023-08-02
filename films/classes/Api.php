<?php

class Api {
    const API_KEY = "625b3e1220c0fca7c7ac7f6fcca786ac";

    static function getImage(string $film) {
        $film = str_replace(' ', '%20', $film);
        $result = json_decode(file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=' . Api::API_KEY . '&query=' . $film));

        if (empty($result->results)) {
            return false;
        }

        return "https://image.tmdb.org/t/p/w500" . $result->results[0]->poster_path;
    }

    static function search(string $film) {
        $film = str_replace(' ', '%20', $film);
        $result = json_decode(file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=' . Api::API_KEY . '&query=' . $film));
        return $result->results;
    }

    static function genre(int $id) {
        $genres = json_decode(file_get_contents("https://api.themoviedb.org/3/genre/movie/list?api_key=" . Api::API_KEY))->genres;
        foreach ($genres as $genre) {
            if ($genre->id == $id) {
                return $genre->name;
            }
        }
        return null;
    }
}