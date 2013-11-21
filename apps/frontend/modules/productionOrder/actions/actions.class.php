<?php

/**
 * productionOrder actions.
 *
 * @package    eMrp
 * @subpackage productionOrder
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productionOrderActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->production_orders = Doctrine_Core::getTable('ProductionOrder')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->production_order = Doctrine_Core::getTable('ProductionOrder')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->production_order);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductionOrderForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductionOrderForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($production_order = Doctrine_Core::getTable('ProductionOrder')->find(array($request->getParameter('id'))), sprintf('Object production_order does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionOrderForm($production_order);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($production_order = Doctrine_Core::getTable('ProductionOrder')->find(array($request->getParameter('id'))), sprintf('Object production_order does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionOrderForm($production_order);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($production_order = Doctrine_Core::getTable('ProductionOrder')->find(array($request->getParameter('id'))), sprintf('Object production_order does not exist (%s).', $request->getParameter('id')));
    $production_order->delete();

    $this->redirect('productionOrder/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $production_order = $form->save();

      $this->redirect('productionOrder/edit?id='.$production_order->getId());
    }
  }
}
