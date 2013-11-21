<?php

/**
 * ProductionItem form base class.
 *
 * @method ProductionItem getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductionItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'production_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionOrder'), 'add_empty' => true)),
      'quantity'            => new sfWidgetFormInputText(),
      'produced'            => new sfWidgetFormInputText(),
      'lost'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'production_order_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionOrder'), 'required' => false)),
      'quantity'            => new sfValidatorInteger(array('required' => false)),
      'produced'            => new sfValidatorInteger(array('required' => false)),
      'lost'                => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('production_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductionItem';
  }

}
