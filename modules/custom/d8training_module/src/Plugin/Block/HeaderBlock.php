<?php
namespace Drupal\d8training_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\d8training_module\Helper;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
use Drupal\paragraphs\Entity\Paragraph;

/**
 * Provides a 'header' block.
 *
 * @Block(
 *   id = "header",
 *   admin_label = @Translation("Header"),
 *   category = @Translation("Custom")
 * )
 */
class HeaderBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node){
      if ($node->hasField('field_header')) {

      }
    }
    $config = \Drupal::config('d8training_module.global_settings');
    $build = [
      '#type' => 'markup',
      '#home_url' => '/',
      '#header_menu' => Helper::getMenu('main'),
      '#primary_logo' => [],
      '#secondary_logo' => [],
      '#email' => $config->get('email'),
      '#telephone' => $config->get('telephone'),
      '#cta' => $config->get('cta'),
      '#cta_url' => $config->get('cta_url'),
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

    // header slider
    $field_header = $node->get("field_header");
    if ($field_header) {
      $header_slider = [];
      foreach ($field_header->getValue() as $header_item) {
        $paragraph = Paragraph::load($header_item['target_id']);
        $field_image = $paragraph->get("field_image")->getValue();
        $field_title = $paragraph->get("field_title")->getValue();
        $field_sub_title = $paragraph->get("field_sub_title")->getValue();
        $field_call_to_action = $paragraph->get("field_call_to_action")->getValue();

        $header_slider[] = [
          "image" => !empty($field_title) ? file_load($field_image[0]["target_id"]) : '',
          "title" => $field_title,
          "sub_title" => $field_sub_title,
          "cta" => $field_call_to_action,
        ];
      }

      if ($header_slider) {
        $build["#header_slider"] = $header_slider;
      }
    }

    // primary logo
    if ($config->get('primary_logo')) {
      $primary_logo =  file_load($config->get('primary_logo'));
      if ($primary_logo) {
        $build['#primary_logo'] = $primary_logo;
      }
    }

    // secondary logo
    if ($config->get('secondary_logo')) {
      $secondary_logo = file_load($config->get('secondary_logo'));
      if ($secondary_logo) {
        $build['#secondary_logo'] = $secondary_logo;
      }
    }
        
    return $build;
  }
}
