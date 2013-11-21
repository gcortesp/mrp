<?php

/**
 * ProductionOrder form base class.
 *
 * @method ProductionOrder getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductionOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'production_line_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'), 'add_empty' => false)),
      'product_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'state_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
      'code'               => new sfWidgetFormInputText(),
      'quantity'           => new sfWidgetFormInputText(),
      'start_date'         => new sfWidgetFormInputText(),
      'start_time'         => new sfWidgetFormInputText(),
      'end_date'           => new sfWidgetFormInputText(),
      'end_time'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'production_line_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'))),
      'product_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'state_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'required' => false)),
      'code'               => new sfValidatorInteger(array('required' => false)),
      'quantity'           => new sfValidatorInteger(array('required' => false)),
      'start_date'         => new sfValidatorInteger(array('required' => false)),
      'start_time'         => new sfValidatorInteger(array('required' => false)),
      'end_date'           => new sfValidatorInteger(array('required' => false)),
      'end_time'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('production_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductionOrder';
  }

}
