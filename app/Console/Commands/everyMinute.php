<?php

namespace App\Console\Commands;

use App\Models\Visitors;
use Illuminate\Console\Command;

class everyMinute extends Command
{
    protected $signature = 'minute:update';
    protected $description = 'Insert new visitor to Laravel\Visitors';

    public function __construct()
    {
        parent::__construct();
    }

    public function emailGen(){
        $email = "mymail".uniqid()."@mail.ru";
        return $email;
    }

    public function handle()
    {
        Visitors::truncate();
        $row = 1;
        if (($handle = fopen("resources/sass/files/visitorsToLoad.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                foreach ($data as $dt){
                    $visitor = new Visitors();

                    $l = explode(';',$dt);

                    $visitor->Name = $l[0];
                    $visitor->Email = $l[1];
                    $visitor->save();
                    echo "Insertion done!" . "\n";
                }

                $row++;
            }
            fclose($handle);
        }




    }

}
