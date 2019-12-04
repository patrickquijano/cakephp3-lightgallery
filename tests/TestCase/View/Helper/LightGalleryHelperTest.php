<?php

namespace LightGallery\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use LightGallery\View\Helper\LightGalleryHelper;

class LightGalleryHelperTest extends TestCase {

    /**
     * @var \LightGallery\View\Helper\LightGalleryHelper
     */
    public $LightGallery;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->LightGallery = new LightGalleryHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->LightGallery);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
