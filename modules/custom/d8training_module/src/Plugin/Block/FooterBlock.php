<?php
namespace Drupal\d8training_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\d8training_module\Helper;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
/**
 * Provides a 'footer' block.
 *
 * @Block(
 *   id = "footer",
 *   admin_label = @Translation("Footer"),
 *   category = @Translation("Custom")
 * )
 */
class FooterBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('d8training_module.global_settings');
    $build = [
      '#type' => 'markup',
      '#home_url' => '/',
      '#footer_menu' => Helper::getMenu('footer'),
      '#image' => [],
      '#address' => $config->get('address'),
      '#email' => $config->get('email'),
      '#telephone' => $config->get('telephone'),
      '#copyright' => $config->get('copyright'),
      '#socials' => [
        'facebook' => $config->get('facebook'),
        'twitter' => $config->get('twitter'),
        'dribble' => $config->get('dribble'),
        'google_plus' => $config->get('google_plus'),
        'flickr' => $config->get('flickr'),
        'pinterest' => $config->get('pinterest'),
        'behance' => $config->get('behance'),
        'skype' => $config->get('skype'),
        'rss' => $config->get('rss')
      ],
    ];
    if ($config->get('footer_logo')) {
      $footer_logo = file_load($config->get('footer_logo'));
      if ($footer_logo) {
        $build['#image'] = $footer_logo;
      }
    }
    return $build;
  }
}
