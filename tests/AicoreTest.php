<?php
/**
 * Tests for AICore
 */

use PHPUnit\Framework\TestCase;
use Aicore\Aicore;

class AicoreTest extends TestCase {
    private Aicore $instance;

    protected function setUp(): void {
        $this->instance = new Aicore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aicore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
