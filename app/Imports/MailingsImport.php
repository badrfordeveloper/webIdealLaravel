<?php

namespace App\Imports;

use App\Models\Mailing;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MailingsImport implements ToCollection
{
    
    public function collection(Collection $rows)
    {
        $first=false;
        foreach ($rows as $row) 
        {
            if(!empty($row[0]) && $first)
            {
                Mailing::create([
                    'email' => $row[0],
                    'etat' => 'non',
                ]);
            } else if(!$first){
                $first=true;
            }
        }
    }
}
