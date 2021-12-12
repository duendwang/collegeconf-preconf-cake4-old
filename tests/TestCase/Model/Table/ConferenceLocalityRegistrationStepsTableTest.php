<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceLocalityRegistrationStepsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceLocalityRegistrationStepsTable Test Case
 */
class ConferenceLocalityRegistrationStepsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceLocalityRegistrationStepsTable
     */
    protected $ConferenceLocalityRegistrationSteps;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceLocalityRegistrationSteps',
        'app.ConferenceLocalities',
        'app.RegistrationSteps',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceLocalityRegistrationSteps') ? [] : ['className' => ConferenceLocalityRegistrationStepsTable::class];
        $this->ConferenceLocalityRegistrationSteps = $this->getTableLocator()->get('ConferenceLocalityRegistrationSteps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceLocalityRegistrationSteps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocalityRegistrationStepsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocalityRegistrationStepsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
