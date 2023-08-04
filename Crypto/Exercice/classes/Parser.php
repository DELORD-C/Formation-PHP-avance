<?php

class Parser {
    static function filmTab (array $films) {
        $template = file_get_contents('templates/list.html');

        $html = "";
        foreach ($films as $film) {
            $html .= "
            <tr>
                <td>" . $film->getId() . '</td>
                <td><img style="max-width: 50px;" src="' . $film->getImage() . '"></td>
                <td>' . $film->getTitle() . "</td>
                <td>" . $film->getResume() . "</td>
                <td>" . $film->getGenre() . "</td>
                <td>
                    <a class='btn btn-primary' href='/POE-PHP-AVANCE/films/edit.php?film=" . $film->getId() . "'>Edit</a>
                    <a class='btn btn-danger' href='/POE-PHP-AVANCE/films/delete.php?film=" . $film->getId() . "'>Delete</a>
                </td>
            </tr>
            ";
        }
        return str_replace('{{ FILMS }}', $html, $template);
    }

    static function filmEditForm(Film $film) {
        $template = file_get_contents('templates/edit.html');
        return str_replace(
            [
                '{{ TITLE }}',
                '{{ RESUME }}',
                '{{ GENRE }}'
            ],
            [
                $film->getTitle(),
                $film->getResume(),
                $film->getGenre()
            ],
            $template);
    }

    static function apiList (array $films) {
        $template = file_get_contents('templates/list_api.html');

        $html = "";
        foreach ($films as $film) {
            if (empty($film->genre_ids)) {
                $genre = 'Non définit';
            }
            else {
                $genre = Api::genre($film->genre_ids[0]);
            }
            $html .= '
            <tr>
                <td><img style="max-width: 50px;" src="https://image.tmdb.org/t/p/w500' . $film->poster_path . '"></td>
                <td>' . $film->title . "</td>
                <td>" . $film->overview . "</td>
                <td>" . $genre . "</td>
                <td>
                    <form action='add.php' method='POST'>
                        <input type='hidden' name='title' value='" . $film->title . "'>
                        <input type='hidden' name='resume' value='" . $film->overview . "'>
                        <input type='hidden' name='genre' value='" . $genre . "'>
                        <input class='btn btn-primary' type='submit' value='+'>
                    </form>
                </td>
            </tr>
            ";
        }
        return str_replace('{{ FILMS }}', $html, $template);
    }
}