<?php

/**
 * Blacklist form base class.
 *
 * @method Blacklist getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBlacklistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'uid'        => new sfWidgetFormInputText(),
      'memo'       => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uid'        => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'memo'       => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Blacklist', 'column' => array('uid')))
    );

    $this->widgetSchema->setNameFormat('blacklist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Blacklist';
  }

}
