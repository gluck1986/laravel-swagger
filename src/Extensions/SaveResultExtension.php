<?php


namespace Gluck1986\Support\AutoDoc\Extensions;

use Gluck1986\Support\AutoDoc\Services\SwaggerService;
use PHPUnit\Runner\AfterLastTestHook;

class SaveResultExtension implements AfterLastTestHook
{
    public function executeAfterLastTest(): void
    {
        $service = app(SwaggerService::class);
        $service->saveProductionData();
    }
}
