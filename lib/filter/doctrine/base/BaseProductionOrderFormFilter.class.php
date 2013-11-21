<?php

/**
 * ProductionOrder filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductionOrderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'production_line_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionLine'), 'add_empty' => true)),
      'product_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'state_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
      'code'               => new sfWidgetFormFilterInput(),
      'quantity'           => new sfWidgetFormFilterInput(),
      'start_date'         => new sfWidgetFormFilterInput(),
      'start_time'         => new sfWidgetFormFilterInput(),
      'end_date'           => new sfWidgetFormFilterInput(),
      'end_time'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'production_line_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductionLine'), 'column' => 'id')),
      'product_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product'), 'column' => 'id')),
      'state_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('State'), 'column' => 'id')),
      'code'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quantity'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_time'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'end_date'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'end_time'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('production_order_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductionOrder';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'production_line_id' => 'ForeignKey',
      'product_id'         => 'ForeignKey',
      'state_id'           => 'ForeignKey',
      'code'               => 'Number',
      'quantity'           => 'Number',
      'start_date'         => 'Number',
      'start_time'         => 'Number',
      'end_date'           => 'Number',
      'end_time'           => 'Number',
    );
  }
}
