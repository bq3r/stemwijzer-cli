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
            'score' => -18,
            'name' => 'Partij voor de Vrijheid (PVV)',
            ],
            'FvD' => [
            'score' => -16,
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
            'Question 1' => [
                'Answer 1',
                'Answer 2',
                'Answer 3',
            ],
            'Question 2' => [
                'Answer 1',
                'Answer 2',
                'Answer 3',
            ],
            'Question 3' => [
                'Answer 1',
                'Answer 2',
                'Answer 3',
            ],
        ];

        
    }
}
