<?php
namespace ZendFirebaseTest;

use ZendFirebase\FirebaseInit;
require_once 'src/FirebaseInit.php';

/**
 * FirebaseInit test case.
 */
class FirebaseInitTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     * @var FirebaseInit
     */
    private $firebaseInit;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated FirebaseInitTest::setUp()
        
        $this->firebaseInit = new FirebaseInit(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated FirebaseInitTest::tearDown()
        $this->firebaseInit = null;
        
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
     * Tests FirebaseInit->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated FirebaseInitTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->firebaseInit->__construct(/* parameters */);
    }

    /**
     * Tests FirebaseInit->setTimeout()
     */
    public function testSetTimeout()
    {
        // TODO Auto-generated FirebaseInitTest->testSetTimeout()
        $this->markTestIncomplete("setTimeout test not implemented");
        
        $this->firebaseInit->setTimeout(/* parameters */);
    }

    /**
     * Tests FirebaseInit->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated FirebaseInitTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->firebaseInit->delete(/* parameters */);
    }

    /**
     * Tests FirebaseInit->get()
     */
    public function testGet()
    {
        // TODO Auto-generated FirebaseInitTest->testGet()
        $this->markTestIncomplete("get test not implemented");
        
        $this->firebaseInit->get(/* parameters */);
    }

    /**
     * Tests FirebaseInit->patch()
     */
    public function testPatch()
    {
        // TODO Auto-generated FirebaseInitTest->testPatch()
        $this->markTestIncomplete("patch test not implemented");
        
        $this->firebaseInit->patch(/* parameters */);
    }

    /**
     * Tests FirebaseInit->post()
     */
    public function testPost()
    {
        // TODO Auto-generated FirebaseInitTest->testPost()
        $this->markTestIncomplete("post test not implemented");
        
        $this->firebaseInit->post(/* parameters */);
    }

    /**
     * Tests FirebaseInit->put()
     */
    public function testPut()
    {
        // TODO Auto-generated FirebaseInitTest->testPut()
        $this->markTestIncomplete("put test not implemented");
        
        $this->firebaseInit->put(/* parameters */);
    }

    /**
     * Tests FirebaseInit->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated FirebaseInitTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->firebaseInit->__destruct(/* parameters */);
    }
}
