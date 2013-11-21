<?php

/**
 * ProductionItem filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductionItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'production_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductionOrder'), 'add_empty' => true)),
      'quantity'            => new sfWidgetFormFilterInput(),
      'produced'            => new sfWidgetFormFilterInput(),
      'lost'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'production_order_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductionOrder'), 'column' => 'id')),
      'quantity'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'produced'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lost'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('production_item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductionItem';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'production_order_id' => 'ForeignKey',
      'quantity'            => 'Number',
      'produced'            => 'Number',
      'lost'                => 'Number',
    );
  }
}
