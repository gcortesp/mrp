<?php

/**
 * Company filter form base class.
 *
 * @package    eMrp
 * @subpackage filter
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCompanyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rut'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address' => new sfWidgetFormFilterInput(),
      'city'    => new sfWidgetFormFilterInput(),
      'country' => new sfWidgetFormFilterInput(),
      'phone'   => new sfWidgetFormFilterInput(),
      'mail'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'rut'     => new sfValidatorPass(array('required' => false)),
      'address' => new sfValidatorPass(array('required' => false)),
      'city'    => new sfValidatorPass(array('required' => false)),
      'country' => new sfValidatorPass(array('required' => false)),
      'phone'   => new sfValidatorPass(array('required' => false)),
      'mail'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Company';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'rut'     => 'Text',
      'address' => 'Text',
      'city'    => 'Text',
      'country' => 'Text',
      'phone'   => 'Text',
      'mail'    => 'Text',
    );
  }
}
