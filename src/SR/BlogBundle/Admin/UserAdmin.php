<?php


namespace SR\BlogBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', TextType::class, array(
                'label' => 'username'))
            ->add('name', TextType::class, array(
                'label' => 'name'))
            ->add('firstname', TextType::class, array(
                'label' => 'firstname'))
            ->add('mail', TextType::class, array(
                'label' => 'mail'))
            ->add('password', PasswordType::class, array(
                'label' => 'password'))
            ->add('avatar', TextType::class, array(
                'label' => 'avatar'))
            ->add('roles', ChoiceType::class, array(
                'choices' => array('ROLE USER' => 'ROLE_USER', 'ROLE ADMIN' => 'ROLE_ADMIN'),
                'multiple' => true,
                'label' => 'roles'))


        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('name')
            ->add('firstname')
            ->add('mail')
            ->add('password')
            ->add('avatar')
            ->add('roles')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('slug')
            ->add('roles')

        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('username')
            ->add('slug')
            ->add('roles')
        ;
    }
}
