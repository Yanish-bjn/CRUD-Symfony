<?php

namespace App\Form;

use App\Entity\Tri;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjouterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('description')
            ->add('statut', ChoiceType::class, [ // Liste deroulante pour le choix du statut //
              'choices' => $this->getChoices()
            ])
            ->add('date_publication')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tri::class,
        ]);
    }
    private function getChoices(){ // fonction permettant de changer les valeurs de la liste deroulante, par les choix du staut //
      $Choices = Tri::STATUT;
      $output = [];
      foreach ($Choices as $k => $v) { // Pour la varible choix allant de k a v //
        $output[$v] = $k; // la valeur de la variable v est egal a k //
      }
      return $output; // on retourne le résultat //
    }
}
