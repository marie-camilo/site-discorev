<?php
function loadEnv($path = '../.env')
{
    if (!file_exists($path)) {
        error_log("Le fichier .env n'existe pas à l'emplacement : " . $path);
        return false;
    }

    try {
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            throw new Exception("Impossible de lire le fichier .env");
        }

        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) continue;

            $parts = explode('=', $line, 2);
            if (count($parts) !== 2) {
                error_log("Format invalide dans le fichier .env : " . $line);
                continue;
            }

            [$name, $value] = $parts;
            $name = trim($name);
            $value = trim($value);

            if (empty($name)) {
                error_log("Nom de variable vide dans le fichier .env");
                continue;
            }

            putenv("$name=$value");
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
        return true;
    } catch (Exception $e) {
        error_log("Erreur lors du chargement du fichier .env : " . $e->getMessage());
        return false;
    }
}
