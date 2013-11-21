<?php

/**
 * ProductLineProduct form base class.
 *
 * @method ProductLineProduct getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductLineProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'product_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'production_line_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'), 'add_empty' => true)),
      'operational_rate'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'required' => false)),
      'production_line_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'), 'required' => false)),
      'operational_rate'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('product_line_product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductLineProduct';
  }

}
