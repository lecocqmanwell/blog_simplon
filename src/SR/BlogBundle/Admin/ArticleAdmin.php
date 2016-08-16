<?php


namespace SR\BlogBundle\Admin;

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\IntegerType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\Type\Filter\ChoiceType;
use Sonata\AdminBundle\Form\Type\Filter\DateType;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class ArticleAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', TextType::class, array(
                'label' => 'Titre Article'))
            ->add('content', TextType::class, array(
                'label' => 'contenu'))
            ->add('published', RadioType::class, array(
                'label' => 'publié'))

//            ->add('publisehd', ChoiceType::class, array(
//                'choices' => array('ROLE_USER' => 'ROLE_USER', 'ROLE_ADMIN' => 'ROLE_ADMIN'),
//                'multiple' => true,
//                'label' => 'roles'))


//            ->add('date', DateType::class, array(
//                'label' => 'Date'))
//            ->add('date','doctrine_orm_date_range', array('show_filter' => true),'sonata_type_date_range_picker',
//                array('field_options_start' => array('format' => 'yyyy-MM-dd'),
//                    'field_options_end' => array('format' => 'yyyy-MM-dd')))
//            ->add('user_id', ChoiceType::class, array(
//                'label' => 'User_Id'))
        ;
    }


    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
//            ->add('user_id')
//            ->add('date')
            ->add('published')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('content')
//            ->add('user_id')
//            ->add('date')
            ->add('published')


        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
            ->add('content')
//            ->add('user_id')
//            ->add('date')
            ->add('published')


        ;
    }
}