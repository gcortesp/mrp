<?php

/**
 * productLineProduct actions.
 *
 * @package    eMrp
 * @subpackage productLineProduct
 * @author     Scoppia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productLineProductActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->product_line_products = Doctrine_Core::getTable('ProductLineProduct')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->product_line_product = Doctrine_Core::getTable('ProductLineProduct')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->product_line_product);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductLineProductForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductLineProductForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($product_line_product = Doctrine_Core::getTable('ProductLineProduct')->find(array($request->getParameter('id'))), sprintf('Object product_line_product does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductLineProductForm($product_line_product);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($product_line_product = Doctrine_Core::getTable('ProductLineProduct')->find(array($request->getParameter('id'))), sprintf('Object product_line_product does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductLineProductForm($product_line_product);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($product_line_product = Doctrine_Core::getTable('ProductLineProduct')->find(array($request->getParameter('id'))), sprintf('Object product_line_product does not exist (%s).', $request->getParameter('id')));
    $product_line_product->delete();

    $this->redirect('productLineProduct/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $product_line_product = $form->save();

      $this->redirect('productLineProduct/edit?id='.$product_line_product->getId());
    }
  }
}
