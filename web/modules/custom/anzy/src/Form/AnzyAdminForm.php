<?php

namespace Drupal\anzy\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;

/**
 * Contains \Drupal\anzy\Form\GbookAdminForm.
 *
 * @file
 */

/**
 * Provides an Gbook form.
 */
class AnzyAdminForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'gbook_admin_form';
  }

  /**
   * Get all reviews for page.
   *
   * @return array
   *   A simple array.
   */
  public function load() {
    $connection = \Drupal::service('database');
    $query = $connection->select('anzy', 'a');
    $query->fields('a', ['name', 'comment', 'phone', 'mail', 'created', 'image', 'avatar', 'id']);
    $result = $query->execute()->fetchAll();
    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $info = json_decode(json_encode($this->load()), TRUE);
    $info = array_reverse($info);
    $content['message'] = [
      '#markup' => $this->t('Below is a list of all reviews including username, email, image, avatar, phone number, comment and submission date.'),
    ];
    $headers = [
      t('Guest name'),
      t('Phone'),
      t('Avatar'),
      t('Comment'),
      t('Email'),
      t('Submitted'),
      t('Photo'),
      t('Delete'),
      t('Edit'),
    ];
    $rows = [];
    foreach ($info as &$value) {
      $fid = $value['image'];
      $avafid = $value['avatar'];
      $id = $value['id'];
      $name = $value['name'];
      $phone = $value['phone'];
      $comment = $value['comment'];
      $mail = $value['mail'];
      $created = $value['created'];
      array_splice($value, 0, 5);
      $renderer = \Drupal::service('renderer');
      $file = File::load($fid);
      $img = [
        '#type' => 'image',
        '#theme' => 'image_style',
        '#style_name' => 'thumbnail',
        '#uri' => $file->getFileUri(),
      ];
      $ava = [
        '#type' => 'image',
        '#theme' => 'image_style',
        '#style_name' => 'thumbnail',
        '#uri' => $file->getFileUri(),
      ];
      $value[0] = $name;
      $value[1] = $mail;
      $value[2] = $created;
      $value[3] = $renderer->render($img);
      $delete = [
        '#type' => 'link',
        '#url' => Url::fromUserInput("/anzy/gbookDel/$id"),
        '#title' => $this->t('Delete'),
        '#attributes' => [
          'data-dialog-type' => ['modal'],
          'class' => ['button', 'use-ajax'],
        ],
      ];
      $value[4] = $renderer->render($delete);
      $edit = [
        '#type' => 'link',
        '#url' => Url::fromUserInput("/admin/anzy/gbookChange/$id"),
        '#title' => $this->t('Edit'),
        '#attributes' => ['class' => ['button']],
      ];
      $value[5] = $renderer->render($edit);
      $newId = [
        '#type' => 'hidden',
        '#value' => $id,
      ];
      $value[6] = $newId;
      array_push($rows, $value);
    }
    $form['table'] = [
      '#type' => 'tableselect',
      '#header' => $headers,
      '#options' => $rows,
      '#empty' => t('No entries available.'),
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Delete all'),
      '#description' => $this->t('Submit, #type = submit'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $value = $form['table']['#value'];
    $connection = \Drupal::service('database');
    foreach ($value as $key => $val) {
      $result = $connection->delete('anzy');
      $result->condition('id', $form['table']['#options'][$key][6]["#value"]);
      $result->execute();
    }
    \Drupal::messenger()->addMessage($this->t('Form Submitted Successfully'), 'status', TRUE);
  }

}
