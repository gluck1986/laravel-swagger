<?php

namespace Gluck1986\Support\AutoDoc\Tests;

use Gluck1986\Support\AutoDoc\Http\Middleware\AutoDocMiddleware;
use Gluck1986\Support\AutoDoc\Services\SwaggerService;
use Illuminate\Foundation\Testing\TestCase;

/**
 * @deprecated use SaveResultExtension
 */
abstract class AutoDocTestCase extends TestCase
{

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();
        app(SwaggerService::class)->saveProductionData();
    }

    /**
     * Disabling documentation collecting on current test
     */
    public function skipDocumentationCollecting()
    {
        AutoDocMiddleware::$skipped = true;
    }
}
