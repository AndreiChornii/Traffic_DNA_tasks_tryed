<?php

class FileOwners {

    public static function groupByOwners($files) {

        $grouped = [];
        foreach ($files as $key => $value) {
            $to_grouped = 1;
            foreach ($grouped as $key_grouped => $value_grouped) {
                if (!strcmp($grouped[$key_grouped], $files[$value])) {
                    $to_grouped = 0;
                }
            }
            if ($to_grouped) {
                $grouped[$value] = 0;
            }
        }
        
        foreach ($grouped as $key_grouped => $value_grouped) {
            $grouped[$key_grouped] = [];
            $to_grouped = 0;
            foreach ($files as $key => $value) {
                if (!strcmp($key_grouped, $value)) {
                    array_push($grouped[$key_grouped], $key);
                }
            }
        }

        return $grouped;
    }

}

$files = array
    (
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
