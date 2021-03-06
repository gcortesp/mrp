<?php

/**
 * BaseCompany
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $rut
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property string $mail
 * @property Doctrine_Collection $ProductionLine
 * 
 * @method string              getName()           Returns the current record's "name" value
 * @method string              getRut()            Returns the current record's "rut" value
 * @method string              getAddress()        Returns the current record's "address" value
 * @method string              getCity()           Returns the current record's "city" value
 * @method string              getCountry()        Returns the current record's "country" value
 * @method string              getPhone()          Returns the current record's "phone" value
 * @method string              getMail()           Returns the current record's "mail" value
 * @method Doctrine_Collection getProductionLine() Returns the current record's "ProductionLine" collection
 * @method Company             setName()           Sets the current record's "name" value
 * @method Company             setRut()            Sets the current record's "rut" value
 * @method Company             setAddress()        Sets the current record's "address" value
 * @method Company             setCity()           Sets the current record's "city" value
 * @method Company             setCountry()        Sets the current record's "country" value
 * @method Company             setPhone()          Sets the current record's "phone" value
 * @method Company             setMail()           Sets the current record's "mail" value
 * @method Company             setProductionLine() Sets the current record's "ProductionLine" collection
 * 
 * @package    eMrp
 * @subpackage model
 * @author     Scoppia
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCompany extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('company');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('rut', 'string', 15, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 15,
             ));
        $this->hasColumn('address', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('city', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('country', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('phone', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
        $this->hasColumn('mail', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProductionLine', array(
             'local' => 'id',
             'foreign' => 'company_id'));
    }
}