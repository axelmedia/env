<?php
if (!function_exists('env')) {
    if (!class_exists('\\AxelMedia\\Env')) {
        include(__DIR__.'/Env.php');
    }

    /**
     * Env class alias
     * @param  mixed $name Key name
     * @return mixed
     */
    function env($arg = null)
    {
        // Get all data
        if (0 === func_num_args()) {
            return \AxelMedia\Env::all();
        }

        // Clear all data
        elseif (PHP_EOL === $arg) {
            return \AxelMedia\Env::clear();
        }

        // Add JSON file
        elseif (is_string($arg)) {
            return \AxelMedia\Env::get($arg);
        }

        // Add JSON file
        elseif (is_array($arg)) {
            return \AxelMedia\Env::file($arg);
        }
    }
}
