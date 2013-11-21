<?php

/**
 * Area filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAreaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'area_id' => new sfWidgetFormFilterInput(),
      'codigo'  => new sfWidgetFormFilterInput(),
      'name'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'area_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo'  => new sfValidatorPass(array('required' => false)),
      'name'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('area_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Area';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'area_id' => 'Number',
      'codigo'  => 'Text',
      'name'    => 'Text',
    );
  }
}
