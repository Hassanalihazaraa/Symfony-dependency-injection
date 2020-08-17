<?php
declare(strict_types=1);

namespace App\Controller;

use App\classes\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="DI")
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return Response
     */
    public function buildForm(FormBuilderInterface $builder, array $options): Response
    {

        $builder
            ->add('input', TextType::class)
            ->add('choice', ChoiceType::class, [
                'choices' => [
                    'Capitalize' => 'capitalize',
                    'change space with dash' => 'dash'
                ]
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Logger::class,
        ]);
    }
//return $this->render('learning/index.html.twig', ['controller_name' => 'LearningController',]);
}


