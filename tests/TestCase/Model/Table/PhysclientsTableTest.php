<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhysclientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhysclientsTable Test Case
 */
class PhysclientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhysclientsTable
     */
    public $Physclients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Physclients',
        'app.Paiementphysiques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Physclients') ? [] : ['className' => PhysclientsTable::class];
        $this->Physclients = TableRegistry::getTableLocator()->get('Physclients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Physclients);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
