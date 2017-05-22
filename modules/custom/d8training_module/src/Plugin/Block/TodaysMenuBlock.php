<?php
namespace Drupal\d8training_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides an Today's Menu block.
 *
 * @Block(
 *   id = "d8t_todays_menu",
 *   admin_label = @Translation("Today's Menu"),
 *   category = @Translation("D8 Training")
 * )
 */
class TodaysMenuBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'd8t_todays_menu',
    );
  }
}
