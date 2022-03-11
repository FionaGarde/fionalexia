<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonthTipsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonthTipsTable Test Case
 */
class MonthTipsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonthTipsTable
     */
    protected $MonthTips;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MonthTips',
        'app.Staffs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MonthTips') ? [] : ['className' => MonthTipsTable::class];
        $this->MonthTips = $this->getTableLocator()->get('MonthTips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MonthTips);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MonthTipsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MonthTipsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
