<?php

/**
 * Product filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'family_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductFamily'), 'add_empty' => true)),
      'unit_measure_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UnitMeasure'), 'add_empty' => true)),
      'codigo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'active'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'family_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductFamily'), 'column' => 'id')),
      'unit_measure_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UnitMeasure'), 'column' => 'id')),
      'codigo'          => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'active'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'family_id'       => 'ForeignKey',
      'unit_measure_id' => 'ForeignKey',
      'codigo'          => 'Text',
      'name'            => 'Text',
      'active'          => 'Boolean',
    );
  }
}
