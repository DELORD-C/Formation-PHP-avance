<?php

class Uploader {
    static function upload (array $file) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], __DIR__ . '/../uploads/' . $filename);
        return $filename;
    }

    static function delete (string $file) {
        if(file_exists($file))
            unlink(__DIR__ . '/../uploads/' . $file);
    }
}