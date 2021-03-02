<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        $medicines = [
            ['commercial_name' => 'Trimycine', 'composition' => 'Triamcinolone acétonide + Néomycine + Nystatine', 'dose' => 'Prendre 2 comprimés par jour, pendant 5 jours minimum','effects' => 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un ant','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d infections de la peau'],
            ['commercial_name' => 'Adimol', 'composition' => 'Amoxicilline + Acide clavulanique', 'dose' => 'Sanofi\', \'1 dose par jour pendant 5 jours','effects' => 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénine','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines ou aux céphalosporines.'],
            ['commercial_name' => 'Amopil', 'composition' => 'Amoxicilline', 'dose' => '5 comprimés par jours','effects' => 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénine','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec précautions'],
            ['commercial_name' => 'Amoxar', 'composition' => 'Amoxicilline', 'dose' => '3 comprimés par jours, le patient dois faire plus de 50Kg','effects' => 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénine','contraindication' => 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.'],
            ['commercial_name' => 'Amoxi Gé', 'composition' => 'Amoxicilline', 'dose' => '1 pipette par semaine','effects' => 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénine','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec précautions'],
            ['commercial_name' => 'Apatoux Vitamine C', 'composition' => 'Tyrothricine + Tétracaïne', 'dose' => '1 sachet tout les 4H dans la limite de 5 sachet par jours','effects' => 'Ce médicament est utilisé en application locale pour traiter l acné et les infections cutanées bacté','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques de la famille des macrolides'],
            ['commercial_name' => 'Bactigel', 'composition' => 'Erythromycine', 'dose' => '1 pillule par semaine','effects' => 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  en cas de phénylcétonur'],
            ['commercial_name' => 'Bactivil', 'composition' => 'Erythromycine', 'dose' => '1 comprimé matin midi et soir','effects' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'],
            ['commercial_name' => 'Cartion', 'composition' => 'Acide acétylsalicylique (aspirine)', 'dose' => '3 spray par jour a injecter dans le nez','effects' => 'Ce médicament est utilisé pour traiter les douleurs d intensité modérée ou intense.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux médicaments de cette famille  d insuffisance '],
            ['commercial_name' => 'Clazer', 'composition' => 'Clarithromycine', 'dose' => '1 lavage matin et soir','effects' => 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.','contraindication' => 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies)'],
            ['commercial_name' => 'Depramil', 'composition' => 'Clomipramine', 'dose' => 'Etaler la crème 3 fois par jours','effects' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisable dans certaine condition','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux macrolides '],
            ['commercial_name' => 'Dimirtam', 'composition' => 'Mirtazapine', 'dose' => '1 comprimé avant chaque repas','effects' => 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères  certaines douleurs rebelles','contraindication' => 'Ce médicament est contre-indiqué en cas de glaucome ou d adénome de la prostate  d infarctus récent'],
            ['commercial_name' => 'Doloril', 'composition' => 'Acide acétylsalicylique', 'dose' => 'Appliquer la crème sur la blessure 4-5 fois par jours','effects' => 'Ce médicament est contre-indiqué en cas de glaucome ou d adénome de la prostate  d infarctus récent','contraindication' => 'La prise de ce produit est contre-indiquée en cas de d allergie à  l un des constituants.'],
            ['commercial_name' => 'Normador', 'composition' => 'Doxylamine', 'dose' => 'Mettre un patch par semaine sur le bras','effects' => 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie au paracétamol ou aux salicylates.'],
            ['commercial_name' => 'Equilar', 'composition' => 'Méclozine', 'dose' => '1 comprimé par repas','effects' => 'Ce médicament est utilisé pour traiter l insomnie chez l adulte.','contraindication' => 'Ce médicament est contre-indiqué en cas de glaucome  de certains troubles urinaires '],
            ['commercial_name' => 'Eveillor', 'composition' => 'Adrafinil', 'dose' => '5 comprimé par jours','effects' => 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.','contraindication' => 'Ce médicament ne doit pas être utilisé en cas d allergie au produit  en cas de glaucome ou de rétent\''],
            ['commercial_name' => 'Insectil', 'composition' => 'Diphénydramine', 'dose' => '1 comprimé toutes les 6h dans la limites de 3 par jours','effects' => 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologique','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'],
            ['commercial_name' => 'Jovenil', 'composition' => 'Josamycine', 'dose' => 'Appliquer une dose dans les oreilles par jour','effects' => 'Ce médicament est utilisé en application locale sur les piqûres d insecte et l urticaire.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux antihistaminiques.'],
            ['commercial_name' => 'Lidoxytracine', 'composition' => 'Oxytétracycline + Lidocaïne', 'dose' => 'Prendre le comprimé par voie oral 2 fois par jour','effects' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'],
            ['commercial_name' => 'Lithorine', 'composition' => 'Lithium', 'dose' => '3 comprimés par jour','effects' => 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants. '],
            ['commercial_name' => 'Parmocodeine', 'composition' => 'Codéine + Paracétamol', 'dose' => 'Prendre un comprimé en cas de nécéssité sans dépasser la dose de 2g par jour','effects' => 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives','contraindication' => 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce trait'],
            ['commercial_name' => 'Physicor', 'composition' => 'Sulbutiamine', 'dose' => 'Appliquer en cas de brulure ','effects' => 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  chez l enfant de moins'],
            ['commercial_name' => 'Pirizan', 'composition' => 'Pyrazinamide', 'dose' => 'Mettre la crème sur le bouton 2 fois par jour','effects' => 'Ce médicament est utilisé pour traiter les baisses d activité physique ou psychique','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'],
            ['commercial_name' => 'Pomadine', 'composition' => 'Bacitracine', 'dose' => '2 comprimé par jour après chaque repas','effects' => 'Ce médicament est utilisé  en association à  d autres antibiotiques  pour traiter la tuberculose.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d insuffisance rénale'],
            ['commercial_name' => 'Troxadet', 'composition' => 'Paroxétine', 'dose' => '1 sachet par jour a prendre par voie oral','effects' => 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l oeil.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques appliqués localement.'],
            ['commercial_name' => 'Touxisol', 'composition' => 'Tyrothricine + Acide ascorbique (Vitamine C)', 'dose' => 'Ne pas dépasser la dose de 5 médicament par jour','effects' => 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l oeil.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie au produit.'],
            ['commercial_name' => 'Uriregul', 'composition' => 'Fosfomycine trométamol', 'dose' => 'Apliquer 1 fois tout les deux jours','effects' => 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.','contraindication' => 'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants'],
        ];
        foreach ($medicines as $medicine){
            \App\Medicine::create([
                'family_id' => mt_rand(1,20),
                'commercial_name' => $medicine['commercial_name'],
                'composition' => $medicine['composition'],
                'effects' => $medicine['effects'],
                'contraindication' => $medicine['contraindication'],
                'order_of_priority' => mt_rand(1,5),
                'dose' => $medicine['dose']
            ]);
        }
    }
}
