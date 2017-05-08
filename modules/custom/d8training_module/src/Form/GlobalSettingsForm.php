<?php
/**
 * @file
 * Contains \Drupal\d8training_module\Form\SiteInformationForm.
 */
namespace Drupal\d8training_module\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;
/**
 * Configures site information for this site.
 */
class GlobalSettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'd8training_module_global_settings_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('d8training_module.global_settings');
    $form['contact_details'] = [
      '#type' => 'details',
      '#title' => t('Contact details'),
      '#open' => TRUE,
      'email' => [
        '#type' => 'email',
        '#title' => $this->t('Email'),
        '#default_value' => $config->get('email'),
      ],
      'telephone' => [
        '#type' => 'tel',
        '#title' => $this->t('Telephone'),
        '#default_value' => $config->get('telephone'),
      ],
      'address' => [
        '#type' => 'textfield',
        '#title' => $this->t('Address'),
        '#default_value' => $config->get('address'),
      ],
      'social_networks' => [
        '#type' => 'details',
        '#title' => t('Social Networks'),
        '#open' => FALSE,
        'facebook' => [
          '#type' => 'url',
          '#title' => $this->t('Facebook'),
          '#default_value' => $config->get('facebook'),
        ],
        'twitter' => [
          '#type' => 'url',
          '#title' => $this->t('Twitter'),
          '#default_value' => $config->get('twitter'),
        ],
        'dribble' => [
          '#type' => 'url',
          '#title' => $this->t('Dribble'),
          '#default_value' => $config->get('dribble'),
        ],
        'google_plus' => [
          '#type' => 'url',
          '#title' => $this->t('Google Plus'),
          '#default_value' => $config->get('google_plus'),
        ],
        'flickr' => [
          '#type' => 'url',
          '#title' => $this->t('Flickr'),
          '#default_value' => $config->get('flickr'),
        ],
        'pinterest' => [
          '#type' => 'url',
          '#title' => $this->t('Pinterest'),
          '#default_value' => $config->get('pinterest'),
        ],
        'skype' => [
          '#type' => 'url',
          '#title' => $this->t('Skype'),
          '#default_value' => $config->get('skype'),
        ],
        'behance' => [
          '#type' => 'url',
          '#title' => $this->t('Behance'),
          '#default_value' => $config->get('behance'),
        ]
      ]
    ];
    $form['header_details'] = [
      '#type' => 'details',
      '#title' => t('Header details'),
      '#open' => TRUE,
      'primary_logo' => [
        '#type' => 'managed_file',
        '#title' => t('Primary Logo'),
        '#upload_validators' => [
          'file_validate_is_image' => [],
          'file_validate_extensions' => ['gif png jpg jpeg'],
        ],
        '#upload_location' => 'public://primary-logo',
        '#default_value' => [$config->get('primary_logo')],
      ],
      'secondary_logo' => [
        '#type' => 'managed_file',
        '#title' => t('Secondary Logo'),
        '#upload_validators' => [
          'file_validate_is_image' => [],
          'file_validate_extensions' => ['gif png jpg jpeg'],
        ],
        '#upload_location' => 'public://secondary-logo',
        '#default_value' => [$config->get('secondary_logo')],
      ],
      'cta' => [
        '#type' => 'link',
        '#title' => $this->t('CTA'),
      ],
    ];
    $form['footer_details'] = [
      '#type' => 'details',
      '#title' => t('Footer details'),
      '#open' => TRUE,
      'footer_logo' => [
        '#type' => 'managed_file',
        '#title' => t('Footer Logo'),
        '#upload_validators' => [
          'file_validate_is_image' => [],
          'file_validate_extensions' => ['gif png jpg jpeg'],
        ],
        '#upload_location' => 'public://footer-logo',
        '#default_value' => [$config->get('footer_logo')],
      ],
      'copyright' => [
        '#type' => 'text_format',
        '#title' => $this->t('Copyright'),
        '#default_value' => $config->get('copyright'),
      ]
    ];
    return parent::buildForm($form, $form_state);
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('d8training_module.global_settings')
      ->set('email', $form_state->getValue('email'))
      ->set('telephone', $form_state->getValue('telephone'))
      ->set('address', $form_state->getValue('address'))
      ->set('facebook', $form_state->getValue('facebook'))
      ->set('twitter', $form_state->getValue('twitter'))
      ->set('dribble', $form_state->getValue('dribble'))
      ->set('google_plus', $form_state->getValue('google_plus'))
      ->set('flickr', $form_state->getValue('flickr'))
      ->set('pinterest', $form_state->getValue('pinterest'))
      ->set('behance', $form_state->getValue('behance'))
      ->set('skype', $form_state->getValue('skype'))
      ->set('primary_logo', reset($form_state->getValue('primary_logo')))
      ->set('secondary_logo', reset($form_state->getValue('secondary_logo')))
      ->set('cta', $form_state->getValue('cta'))
      ->set('footer_logo', reset($form_state->getValue('footer_logo')))
      ->set('copyright', strip_tags($form_state->getValue('copyright')['value'], '<span><a>'))
      ->save();
    parent::submitForm($form, $form_state);
  }
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'd8training_module.global_settings',
    ];
  }
}
