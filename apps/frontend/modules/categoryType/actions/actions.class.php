<?php

/**
 * categoryType actions.
 *
 * @package    eMrp
 * @subpackage categoryType
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryTypeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->category_types = Doctrine_Core::getTable('CategoryType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->category_type = Doctrine_Core::getTable('CategoryType')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->category_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoryTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoryTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($category_type = Doctrine_Core::getTable('CategoryType')->find(array($request->getParameter('id'))), sprintf('Object category_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryTypeForm($category_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($category_type = Doctrine_Core::getTable('CategoryType')->find(array($request->getParameter('id'))), sprintf('Object category_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryTypeForm($category_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($category_type = Doctrine_Core::getTable('CategoryType')->find(array($request->getParameter('id'))), sprintf('Object category_type does not exist (%s).', $request->getParameter('id')));
    $category_type->delete();

    $this->redirect('categoryType/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $category_type = $form->save();

      $this->redirect('categoryType/edit?id='.$category_type->getId());
    }
  }
}
