<?php

class FileUtility {
    public static function writeToFile($filename, $data) {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }
    public static function readFromFile($filename) {
        $file = fopen($filename, 'r');
        $data = [];
        while (($row = fgetcsv($file)) !== false) {
            $data[] = $row;
        }
        fclose($file);
        return $data;
    }
}
