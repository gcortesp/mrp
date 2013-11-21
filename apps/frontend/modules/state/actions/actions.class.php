<?php

/**
 * state actions.
 *
 * @package    eMrp
 * @subpackage state
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class stateActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->states = Doctrine_Core::getTable('State')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->state = Doctrine_Core::getTable('State')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->state);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new StateForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new StateForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($state = Doctrine_Core::getTable('State')->find(array($request->getParameter('id'))), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $this->form = new StateForm($state);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($state = Doctrine_Core::getTable('State')->find(array($request->getParameter('id'))), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $this->form = new StateForm($state);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($state = Doctrine_Core::getTable('State')->find(array($request->getParameter('id'))), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $state->delete();

    $this->redirect('state/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $state = $form->save();

      $this->redirect('state/edit?id='.$state->getId());
    }
  }
}
