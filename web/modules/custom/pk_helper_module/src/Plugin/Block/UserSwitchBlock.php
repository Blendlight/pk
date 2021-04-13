<?php

namespace Drupal\pk_helper_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'UserSwitchBlock' block.
 *
 * @Block(
 *  id = "user_switch_block",
 *  admin_label = @Translation("User switch block"),
 * )
 */
class UserSwitchBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'user_switch_block';
    $build['user_switch_block']['#markup'] = 'Implement UserSwitchBlock.';

    return $build;
  }

}
