<?php

/**
 * productionLine actions.
 *
 * @package    eMrp
 * @subpackage productionLine
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productionLineActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->production_lines = Doctrine_Core::getTable('ProductionLine')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->production_line = Doctrine_Core::getTable('ProductionLine')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->production_line);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductionLineForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductionLineForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($production_line = Doctrine_Core::getTable('ProductionLine')->find(array($request->getParameter('id'))), sprintf('Object production_line does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionLineForm($production_line);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($production_line = Doctrine_Core::getTable('ProductionLine')->find(array($request->getParameter('id'))), sprintf('Object production_line does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductionLineForm($production_line);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($production_line = Doctrine_Core::getTable('ProductionLine')->find(array($request->getParameter('id'))), sprintf('Object production_line does not exist (%s).', $request->getParameter('id')));
    $production_line->delete();

    $this->redirect('productionLine/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $production_line = $form->save();

      $this->redirect('productionLine/edit?id='.$production_line->getId());
    }
  }
}
