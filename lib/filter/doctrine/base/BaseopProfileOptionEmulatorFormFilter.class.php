<?php

/**
 * opProfileOptionEmulator filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseopProfileOptionEmulatorFormFilter extends ProfileOptionFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('op_profile_option_emulator_filters[%s]');
  }

  public function getModelName()
  {
    return 'opProfileOptionEmulator';
  }
}
