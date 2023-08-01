<?php

class Parser {
    static function filmTab (array $films) {
        $template = file_get_contents('templates/list.html');

        $html = "";
        foreach ($films as $film) {
            $html .= "
            <tr>
                <td>" . $film->getId() . "</td>
                <td>" . $film->getTitle() . "</td>
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
}