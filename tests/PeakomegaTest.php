<?php
/**
 * Tests for PeakOmega
 */

use PHPUnit\Framework\TestCase;
use Peakomega\Peakomega;

class PeakomegaTest extends TestCase {
    private Peakomega $instance;

    protected function setUp(): void {
        $this->instance = new Peakomega(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakomega::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
