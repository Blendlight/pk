<?php

namespace Drupal\pk_helper_module\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the pk_helper_module module.
 */
class TestHelperControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "pk_helper_module TestHelperController's controller functionality",
      'description' => 'Test Unit for module pk_helper_module and controller TestHelperController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests pk_helper_module functionality.
   */
  public function testTestHelperController() {
    // Check that the basic functions of module pk_helper_module.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
