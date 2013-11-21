<?php

/**
 * ProductionLine form base class.
 *
 * @method ProductionLine getObject() Returns the current form's model object
 *
 * @package    eMrp
 * @subpackage form
 * @author     Scoppia
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductionLineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'company_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => true)),
      'area_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Area'), 'add_empty' => true)),
      'codigo'     => new sfWidgetFormInputText(),
      'name'       => new sfWidgetFormInputText(),
      'model'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'company_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'required' => false)),
      'area_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Area'), 'required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'model'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('production_line[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductionLine';
  }

}
