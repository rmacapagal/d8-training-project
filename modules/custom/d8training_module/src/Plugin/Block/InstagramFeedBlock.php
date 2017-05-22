<?php
namespace Drupal\d8training_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides an Instagram Feed block.
 *
 * @Block(
 *   id = "d8t_instagram_feed",
 *   admin_label = @Translation("Instagram Feed"),
 *   category = @Translation("D8 Training")
 * )
 */
class InstagramFeedBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'd8t_instagram_feed',
    );
  }
}
