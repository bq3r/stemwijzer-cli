<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class start extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It starts the "stemwijzer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $parties = [
            'PVV' => [
                'score' => -16,
                'name' => 'Partij voor de Vrijheid (PVV)',
            ],
            'FvD' => [
                'score' => -15,
                'name' => 'Forum voor Democratie (FvD)',
            ],
            'JA21' => [
                'score' => -14,
                'name' => 'JA21',
            ],
            'SGP' => [
                'score' => -12,
                'name' => 'Staatkundig Gereformeerde Partij (SGP)',
            ],
            'VVD' => [
                'score' => -8,
                'name' => 'Volkspartij voor Vrijheid en Democratie (VVD)',
            ],
            'CDA' => [
                'score' => -4,
                'name' => 'Christen-Democratisch Appèl (CDA)',
            ],
            'D66' => [
                'score' => 0,
                'name' => 'Democraten 66 (D66)',
            ],
            'CU' => [
                'score' => 2,
                'name' => 'ChristenUnie (CU)',
            ],
            'PvdD' => [
                'score' => 6,
                'name' => 'Partij voor de Dieren (PvdD)',
            ],
            'PvdA' => [
                'score' => 8,
                'name' => 'Partij van de Arbeid (PvdA)',
            ],
            'SP' => [
                'score' => 14,
                'name' => 'Socialistische Partij (SP)',
            ],
            'GroenLinks' => [
                'score' => 16,
                'name' => 'GroenLinks',
            ],
            'DENK' => [
                'score' => 10,
                'name' => 'DENK',
            ],
        ];

        $questionsAndAnswers = [
            'Hoe belangrijk vind je economische vrijheid?' => [
                'Zeer belangrijk',
                'Belangrijk',
                'Minder belangrijk',
            ],
            'Wat vind je van sociale zekerheid?' => [
                'Beperken',
                'Huidige niveau behouden',
                'Uitbreiden',
            ],
            'Hoe kijk je naar belasting op grote bedrijven?' => [
                'Verlagen',
                'Ongewijzigd laten',
                'Verhogen',
            ],
            'Wat vind je van de Europese Unie?' => [
                'Minder macht naar de EU',
                'EU-hervormingen, maar blijven',
                'EU verder integreren',
            ],
            'Hoe belangrijk is milieubeleid voor jou?' => [
                'Niet belangrijk',
                'Neutraal',
                'Belangrijk',
            ],
            'Wat is jouw standpunt over privatisering van openbare diensten?' => [
                'Privatisering',
                'Huidige situatie behouden',
                'Nationaliseren',
            ],
            'Hoe zie je de rol van religie in de overheid?' => [
                'Religie moet een rol spelen',
                'Scheiding van kerk en staat',
                'Religie moet geen rol spelen',
            ],
            'Wat is jouw mening over defensie-uitgaven?' => [
                'Verhogen',
                'Huidige niveau behouden',
                'Verlagen',
            ],
            'Hoe denk je over multiculturalisme?' => [
                'Negatief',
                'Neutraal',
                'Positief',
            ],
            'Wat vind je van abortusrechten?' => [
                'Strenger beperken',
                'Behouden met beperkingen',
                'Vrije keuze behouden',
            ],
            'Hoe kijk je naar de rol van de staat in de economie?' => [
                'Minder staatsinterventie',
                'Geringe staatsinterventie',
                'Meer staatsinterventie',
            ],
            'Wat is jouw standpunt over klimaatverandering?' => [
                'Geen probleem',
                'Licht probleem',
                'Ernstig probleem',
            ],
            'Hoe denk je over onderwijs?' => [
                'Meer privatiseren',
                'Huidige systeem behouden',
                'Meer overheidsgestuurd maken',
            ],
            'Wat is jouw mening over belastingen voor de rijken?' => [
                'Verlaging',
                'Geen verandering',
                'Verhogen',
            ],
            'Hoe belangrijk is veiligheid voor jou?' => [
                'Belangrijkste prioriteit',
                'Zeer belangrijk',
                'Minder belangrijk',
            ],
            'Wat is jouw standpunt over LGBTQ+-rechten?' => [
                'Beperken',
                'Neutraal',
                'Uitbreiden',
            ],
            'Hoe kijk je naar woningbouw?' => [
                'Volledig door de markt laten bepalen',
                'Gelijke rol voor privaat en publiek',
                'Meer publiek dan privaat',
            ],
            'Wat vind je van vluchtelingenbeleid?' => [
                'Grenzen sluiten',
                'Strenger beleid',
                'Ruimhartig toelaten',
            ],
            'Hoe denk je over economische ongelijkheid?' => [
                'Natuurlijke uitkomst van de markt',
                'Beperkte herverdeling',
                'Actief herverdelen',
            ],
        ];

        $score = 0;
        foreach ($questionsAndAnswers as $question => $answers) {
            $this->info($question);
            $this->info('1. ' . $answers[0]);
            $this->info('2. ' . $answers[1]);
            $this->info('3. ' . $answers[2]);
            $answer = $this->ask('Kies een antwoord (1, 2 of 3)');

            if ($answer == 1) {
                $score -= 1;
            } elseif ($answer == 2) {
            } elseif ($answer == 3) {
                $score += 1;
            } else {
                $this->error('Ongeldige keuze');
                return;
            }
        }
        $this->info('Je hebt een score van ' . $score . ' punten');
        $this->info('Dit zijn de partijen die bij jou passen:');
    }

    public function getClosestNumber($target, $array, $amount)
    {
        $differenceArray = [];
        foreach ($array as $number) {
            $rawDifference = $target - $number;
            $difference = abs($rawDifference);
            $differenceArray[$difference] = $number;
        }
            ksort($differenceArray);
            $closest = [];
        for ($i=0; $i < $amount ; $i++) { 
            $closest[$i] = array_values($differenceArray)[$i];
        }
        return $closest;
    }
}
