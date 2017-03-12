<?php
use MongoTest\Bootstrap;
use MongoTest\Service\MongoService;
use MongoTest\Document\MongoTest;


require_once (__DIR__ . '/../bootstrap.php');

/**
 * BadgeService test case.
 */
class MongoServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var BadgeService
     */
    private $mongoService;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        Bootstrap::init();
        
        $this->mongoService = Bootstrap::getServiceManager()->get(MongoService::class);
        
        
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->mongoService = null;

        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests DiscussionService->__construct()
     */
    public function test__construct()
    {
        $this->assertInstanceOf(MongoService::class, $this->mongoService);        
    }  
    
    public function testInsert()
    {
    	
    	$result = $this->mongoService->insertData('fuck offf eh');
    	
    	$this->assertInstanceOf(MongoTest::class, $result);
    }
}