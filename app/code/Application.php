<?php
namespace App;

class Application extends \Illuminate\Foundation\Application
{

    /**
     * Create a new Illuminate application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);

        $this->useAppPath($this->basePath('app' . DIRECTORY_SEPARATOR . 'code'));
    }

    /**
     * Get the path to the resources directory.
     *
     * @param  string  $path
     * @return string
     */
    public function resourcePath($path = '')
    {
        return $this->joinPaths($this->basePath('app' . DIRECTORY_SEPARATOR . 'assets'), $path);
    }

}
