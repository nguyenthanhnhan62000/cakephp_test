<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubmenusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubmenusTable Test Case
 */
class SubmenusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubmenusTable
     */
    protected $Submenus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Submenus',
        'app.Menus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Submenus') ? [] : ['className' => SubmenusTable::class];
        $this->Submenus = $this->getTableLocator()->get('Submenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Submenus);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubmenusTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubmenusTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
