<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'family_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductFamily'), 'add_empty' => false)),
      'unit_measure_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UnitMeasure'), 'add_empty' => false)),
      'codigo'          => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'active'          => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'family_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductFamily'))),
      'unit_measure_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UnitMeasure'))),
      'codigo'          => new sfValidatorString(array('max_length' => 255)),
      'name'            => new sfValidatorString(array('max_length' => 50)),
      'active'          => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
