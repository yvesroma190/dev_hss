<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaiementphysiquesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaiementphysiquesTable Test Case
 */
class PaiementphysiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaiementphysiquesTable
     */
    public $Paiementphysiques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paiementphysiques',
        'app.Physclients',
        'app.Offres',
        'app.Periodes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paiementphysiques') ? [] : ['className' => PaiementphysiquesTable::class];
        $this->Paiementphysiques = TableRegistry::getTableLocator()->get('Paiementphysiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paiementphysiques);

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
