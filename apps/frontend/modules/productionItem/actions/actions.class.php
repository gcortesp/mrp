<?php

/**
 * productionItem actions.
 *
 * @package    eMrp
 * @subpackage productionItem
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productionItemActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->production_items = Doctrine_Core::getTable('ProductionItem')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->production_item = Doctrine_Core::getTable('ProductionItem')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->production_item);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductionItemForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductionItemForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($production_item = Doctrine_Core::getTable('ProductionItem')->find(array($request->getParameter('id'))), sprintf('Object production_item does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionItemForm($production_item);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($production_item = Doctrine_Core::getTable('ProductionItem')->find(array($request->getParameter('id'))), sprintf('Object production_item does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionItemForm($production_item);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($production_item = Doctrine_Core::getTable('ProductionItem')->find(array($request->getParameter('id'))), sprintf('Object production_item does not exist (%s).', $request->getParameter('id')));
    $production_item->delete();

    $this->redirect('productionItem/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $production_item = $form->save();

      $this->redirect('productionItem/edit?id='.$production_item->getId());
    }
  }
}
