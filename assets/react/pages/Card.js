import * as React from 'react';
import Card from '@mui/material/Card';
import CardContent from '@mui/material/CardContent';
import CardMedia from '@mui/material/CardMedia';
import Typography from '@mui/material/Typography';
import { CardActionArea } from '@mui/material';
<<<<<<< HEAD
=======
import '../../styles/app.css';

const produits = [
  { nom: "Creme revitalift", prix: 10, description: "Une creme de jour parfaite pour une hydratation optimale.", photo: "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/234866/234866-l-oreal-paris-revitalift-creme-de-jour-1000x1000.jpg?frz-v=5569", ingredient: "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl." },
  { nom: "Fond de teint fluide", prix: 15, description: "Un fond de teint fluide pour une couvrance parfaite.", photo: "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/270667/270667-l-oreal-paris-accord-parfait-serum-teinte-repulpant-0-5-2-very-light-1000x1000.jpg?frz-v=5569", ingredient: "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl." },
  { nom: "Shampoing réparateur", prix: 20, description: "Un shampoing réparateur pour des cheveux en bonne santé.", photo: "https://www.nocibe.fr/medias/produits/266414/266414-l-oreal-professionnel-absolut-repair-shampoing-reparateur-pour-cheveux-abimes-500ml-flacon-1000x1000.jpg", ingredient: "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl." },
  { nom: "Baume à lèvres teinté Glow Paradise", prix: 10, description: "Un baume à lèvres pour des lèvres hydratées et colorées.", photo: "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/291094/291094-l-oreal-paris-baume-a-levres-teinte-glow-paradise-353mulberry-ecstatic-baume-a-levres-teinte-glow-paradise-1000x1000.jpg?frz-v=5569", ingredient: "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl." },
  { nom: "Shampooing masque Absolut Repair Série Expert", prix: 20, description: "Un shampooing masque pour des cheveux en bonne santé.", photo: "https://www.nocibe.fr/fstrz/r/s/www.nocibe.fr/medias/produits/266404/266404-l-oreal-professionnel-absolut-repair-masque-restructurant-dore-pour-cheveux-abimes-250ml-pot-1000x1000.jpg?frz-v=5569", ingredient: "Acide hyaluronique, Pro-Xylane, LHA, Adénosine, Fibrelastyl." },
  { nom: "Ombre à paupières", prix: 25, description: "Une ombre à paupières pour un regard de biche.", photo: "https://www.la-parfumerie-discount.fr/698-medium_default/ombre-a-paupieres-color-riche-les-ombres-l-oreal.jpg", ingredient: "Acide hyaluronique, Pro-Xylane, Adénosine, Fibrelastyl" },
];
>>>>>>> 24185859714841a28d1f4a7447d713a7397c165b

export default function GradientCover() {
  return (
    <>
      {produits.map((produit, index) => (
        <Card key={index} sx={{ maxWidth: 345 }}>
          <CardActionArea>
            <CardMedia
              component="img"
              height="140"
              image={produit.photo}
              alt={produit.nom}
              className="card"
            />
            <CardContent>
              <Typography gutterBottom variant="h5" component="div">
                {produit.nom}
              </Typography>
              <Typography variant="body2" color="text.secondary">
                {produit.description}
              </Typography>
            </CardContent>
          </CardActionArea>
        </Card>
      ))}
    </>
  );
}
