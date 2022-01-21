<?php

if (! function_exists('sanitize_filename')) {
    /**
     * Function to sanitize the file name for url and file name safe.
     *
     * @param  string  $unsafeFilename
     * @return string
     */
    function sanitize_filename($unsafeFilename)
    {
        $dangerousCharacters = array(" ", '"', "'", "&", "/", "\\", "?", "#");
        $safeFilename = str_replace($dangerousCharacters, '_', $unsafeFilename);

        return $safeFilename;
    }
}

if (! function_exists('is_blank')) {
    /**
     * Determine if the given value is "empty" or "blank"
     *
     * @param  mixed  $value
     * @return bool
     */
    function is_blank($value): bool
    {
        if (is_null($value)) {
            return true;
        }

        if (is_string($value)) {
            return trim($value) === '';
        }

        if (is_numeric($value) || is_bool($value)) {
            return false;
        }

        if ($value instanceof Countable) {
            return count($value) === 0;
        }

        return empty($value);
    }
}

if (! function_exists('model_namespace_prefix')) {
    /**
     * Description - Return Model Dir Prefix
     * @return string (string)
     */
    function model_namespace_prefix(): string
    {
        return app()->getNamespace() . 'Models\\';
    }
}

if (! function_exists('is_assoc')) {
    /**
     * Determines if array is "associative" or "sequential"
     *
     * @param  array  $array
     * @return bool
     */
    function is_assoc(array $array): bool
    {
        $keys = array_keys($array);

        return $keys !== array_keys($keys);
    }
}

if (! function_exists('str_matches_pattern')) {
    /**
     * Check if string matched the given regex pattern
     *
     * @param  string  $str
     * @param  string  $regex
     * @return bool
     */
    function str_matches_pattern(string $str, string $regex): bool
    {
        return preg_match($regex, $str, $matches) === 1 && $matches[0] === $str;
    }
}

if (! function_exists('format_bytes')) {
    /**
     * Format size as traditional file size
     *
     * @param  int  $size
     * @param  int  $precision
     * @return string
     */
    function format_bytes(int $size, int $precision = 2): string
    {
        $base = log((float) $size, 1024);
        $suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }
}

if (! function_exists('multi_array_unique')) {
    /**
     * Returns unique array of a multidimensional array
     *
     * @param  array  $array
     * @return array
     */
    function multi_array_unique(array $array): array
    {
        $uniqueArray = array_intersect_key(
            $array,
            array_unique(array_map('serialize', $array))
        );

        return array_values($uniqueArray);
    }
}

if (! function_exists('timezones')) {
    /**
     * Return array of PHP timezones
     */
    function timezones(): array
    {
        return (array) timezone_identifiers_list();
    }
}
