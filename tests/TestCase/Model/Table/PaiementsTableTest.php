<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaiementsTable Test Case
 */
class PaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaiementsTable
     */
    public $Paiements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paiements',
        'app.Clients',
        'app.Souscriptions',
        'app.Offres',
        'app.Etatpaiements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paiements') ? [] : ['className' => PaiementsTable::class];
        $this->Paiements = TableRegistry::getTableLocator()->get('Paiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paiements);

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
