<?php


namespace Gluck1986\Support\AutoDoc\Extensions;

use Gluck1986\Support\AutoDoc\Services\LocalDataCollector;
use Gluck1986\Support\AutoDoc\Services\SwaggerService;
use PHPUnit\Runner\AfterLastTestHook;

class SaveResultExtension implements AfterLastTestHook
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = dirname(dirname(dirname(dirname(dirname(__DIR__))))) . DIRECTORY_SEPARATOR . $filePath;
        echo $this->filePath;
    }

    public function executeAfterLastTest(): void
    {
        $saver = new LocalDataCollector($this->filePath);
        $saver->saveData();
    }
}
