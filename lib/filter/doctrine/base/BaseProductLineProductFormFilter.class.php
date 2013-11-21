<?php

/**
 * ProductLineProduct filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductLineProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'production_line_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'), 'add_empty' => true)),
      'operational_rate'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'product_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product'), 'column' => 'id')),
      'production_line_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductionLine'), 'column' => 'id')),
      'operational_rate'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('product_line_product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductLineProduct';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'product_id'         => 'ForeignKey',
      'production_line_id' => 'ForeignKey',
      'operational_rate'   => 'Number',
    );
  }
}
