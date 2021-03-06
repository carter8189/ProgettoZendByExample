<?php

namespace Users\Form;

use Zend\Form\Form;

class RegisterForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('Register');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');
        
        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'  => 'text',
                'required' => 'required'                                 
            ),
            'options' => array(
                'label' => 'Nome completo',
            ),
        ));
        
        $this->add(array(
            'name' => 'address',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Indirizzo',
            ),
        ));
        
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'email',
                'required' => 'required'                 
            ),
            'options' => array(
                'label' => 'Email',
            )
        ));
        
        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
                'required' => 'required'                                 
            ),
            'options' => array(
                'label' => 'Password',
            ),
        )); 

        $this->add(array(
            'name' => 'confirm_password',
            'attributes' => array(
                'type'  => 'password',
                'required' => 'required'                                 
            ),
            'options' => array(
                'label' => 'Confirm Password',
            ),
        )); 

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Register'
            ),
        )); 
    }
}
        