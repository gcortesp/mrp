<?php

/**
 * Company form base class.
 *
 * @method Company getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'rut'     => new sfWidgetFormInputText(),
      'address' => new sfWidgetFormInputText(),
      'city'    => new sfWidgetFormInputText(),
      'country' => new sfWidgetFormInputText(),
      'phone'   => new sfWidgetFormInputText(),
      'mail'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 255)),
      'rut'     => new sfValidatorString(array('max_length' => 15)),
      'address' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'city'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'country' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'phone'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'mail'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Company';
  }

}
