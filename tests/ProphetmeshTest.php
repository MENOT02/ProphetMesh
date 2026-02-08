<?php
/**
 * Tests for ProphetMesh
 */

use PHPUnit\Framework\TestCase;
use Prophetmesh\Prophetmesh;

class ProphetmeshTest extends TestCase {
    private Prophetmesh $instance;

    protected function setUp(): void {
        $this->instance = new Prophetmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Prophetmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
