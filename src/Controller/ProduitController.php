<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/produit.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/produit-1', name: 'app_produit_detail')]
    public function detail(): Response
    {
        $produit = [
            "nom" => "Creme revitalift",
            "prix"=> 10,
            "description" => "Une creme de jour parfaite pour une hydratation optimale.",
            "photo"=> "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/234866/234866-l-oreal-paris-revitalift-creme-de-jour-1000x1000.jpg?frz-v=5569",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit1.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit-2', name: 'app_produit_detail2')]
    public function detail2(): Response
    {
        $produit = [
            "nom" => "Fond de teint fluide",
            "prix"=> 15,
            "description" => "Un fond de teint fluide pour une couvrance parfaite.",
            "photo"=> "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/270667/270667-l-oreal-paris-accord-parfait-serum-teinte-repulpant-0-5-2-very-light-1000x1000.jpg?frz-v=5569",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit2.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit-3', name: 'app_produit_detail3')]
    public function detail3(): Response
    {
        $produit = [
            "nom" => "Shampoing réparateur",
            "prix"=> 20,
            "description" => "Un shampoing réparateur pour des cheveux en bonne santé.",
            "photo"=> "https://www.nocibe.fr/medias/produits/266414/266414-l-oreal-professionnel-absolut-repair-shampoing-reparateur-pour-cheveux-abimes-500ml-flacon-1000x1000.jpg",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit3.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit-4', name: 'app_produit_detail4')]
    public function detail4(): Response
    {
        $produit = [
            "nom" => "Baume à lèvres teinté Glow Paradise",
            "prix"=> 10,
            "description" => "Un baume à lèvres pour des lèvres hydratées et colorées.",
            "photo"=> "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/291094/291094-l-oreal-paris-baume-a-levres-teinte-glow-paradise-353mulberry-ecstatic-baume-a-levres-teinte-glow-paradise-1000x1000.jpg?frz-v=5569",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit4.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit-5', name: 'app_produit_detail5')]
    public function detail5(): Response
    {
        $produit = [
            "nom" => "Shampooing masque Absolut Repair Série Expert",
            "prix"=> 20,
            "description" => "Un shampooing masque pour des cheveux en bonne santé.",
            "photo"=> "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/266404/266404-l-oreal-professionnel-absolut-repair-masque-restructurant-dore-pour-cheveux-abimes-250ml-pot-1000x1000.jpg?frz-v=5569",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit5.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit-6', name: 'app_produit_detail6')]
    public function detail6(): Response
    {
        $produit = [
            "nom" => "Ombre à paupières",
            "prix"=> 25,
            "description" => "Une ombre à paupières pour un regard de biche.",
            "photo"=> "https://www.la-parfumerie-discount.fr/698-medium_default/ombre-a-paupieres-color-riche-les-ombres-l-oreal.jpg",
            "ingredient"=> "Acide hyaluronique, Pro-Xylane, Adénosine, Fibrelastyl."
        ];

        return $this->render('produit/produit6.html.twig', [
            'produit' => $produit,
        ]);
    }
}
