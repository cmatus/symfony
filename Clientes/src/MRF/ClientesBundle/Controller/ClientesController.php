<?php

namespace MRF\ClientesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\ClientesBundle\Entity\cliente;
use MRF\ClientesBundle\Form\clienteType;



class ClientesController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('MRFClientesBundle:cliente')->findAll();
        
        $deleteForm = $this->createDeleteForm($clientes);
        
        return $this->render('MRFClientesBundle:Clientes:index.html.twig',
                array('clientes' => $clientes));
    }
    
    public function addAction() {
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        
        return $this->render('MRFClientesBundle:Clientes:add.html.twig', array('form' => $form->createview()));
        
    }
    
    private function createCreateForm(cliente $entity)
    {
        $form = $this->createForm(new clienteType(), $entity, array(
            'action' => $this->generateUrl('mrf_clientes_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
    public function createAction(Request $request)
    {   
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue creado con exito.');
            
            return $this->redirectToRoute('mrf_clientes_list');
        }
        return $this->render('MRFClientesBundle:Clientes:add.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('MRFClientesBundle:cliente')->find($id);
        
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        $form = $this->createEditForm($cliente);            
        return $this->render('MRFClientesBundle:Clientes:edit.html.twig', array('cliente' =>$cliente, 'form' => $form->createView(),));

    }
    
    private function createEditForm(cliente $entity) {
        $form = $this->createForm(new clienteType(), $entity, array('action'=>  $this->generateUrl
                ('mrf_clientes_update', array('id' =>$entity->getId())), 'method' =>'PUT'));
        return $form;
    }
    
    
    
    public function updateAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('MRFClientesBundle:cliente')->find($id);
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        
        $form = $this->createEditForm($cliente);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_clientes_list', array('id'=>$cliente->getId()));
            
        }
        return $this->render('MRFClientesBundle:Clientes:edit.html.twig', array('cliente'=>$cliente, 'form'=>$form
            ->createView()));
    }
    
    public function viewAction($id) {
        $repository = $this->getDoctrine()->getRepository('MRFClientesBundle:cliente');
        $clientes = $repository->find($id);
        if(!$clientes){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        
        
        return $this->render('MRFClientesBundle:Clientes:view.html.twig', array('cliente'=>$clientes));
    }
    
    private function createDeleteForm( $clientes) {
        return $this->createFormBuilder()
                ->setAction($this->generateUrl('mrf_clientes_delete', array('id'=>1)))
                ->setMethod('DELETE')
                ->getForm();
        //$clientes -> getId()
    }
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $cliente = $em->getRepository('MRFClientesBundle:cliente')->find($id);
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        $form = $this->createDeleteForm($cliente);
        $form ->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->remove($cliente);
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue Eliminado con exito.');            
            return $this->redirectToRoute('mrf_clientes_list');
            
        }
        
    }
}
