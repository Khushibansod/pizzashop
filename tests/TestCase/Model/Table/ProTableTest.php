<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProTable Test Case
 */
class ProTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProTable
     */
    protected $Pro;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pro') ? [] : ['className' => ProTable::class];
        $this->Pro = $this->getTableLocator()->get('Pro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pro);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
