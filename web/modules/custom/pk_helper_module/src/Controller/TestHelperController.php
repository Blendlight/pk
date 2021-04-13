<?php

namespace Drupal\pk_helper_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TestHelperController.
 */
class TestHelperController extends ControllerBase {

  /**
   * Test.
   *
   * @return string
   *   Return Hello string.
   */
  public function test() {


    //create terms
   /*  $termsInfo = json_decode('["AI","Asia","Blockchain","Climathon2020","Data","Deliberation","Democracy","Energy & Electricity","Environment","Europe","Extreme weather & resilance","Food & Agriculture","foresight","Hirschmann","International Law","IoT","Migration","Mobility & Transport","Multilateralism","Other","Participation","Robotics","Social Cohesion","Sustainablity","Technology","Trust in Information","Voting","VR / AR"]');


    foreach($termsInfo as $term)
    {
      $term = \Drupal\taxonomy\Entity\Term::create(["vid" => "subject", 'name'=>$term]);
      $term->save();
    } */



    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: test')
    ];
  }

}
