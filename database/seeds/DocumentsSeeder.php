<?php

use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $document = new Documents();
       $document->DocName = 'Sistemas Doc';
       $document->DocSrc = '/images/default_temporal.pdf';
       $document->DocVersion = 'AC';
       $document->DocType = 'Manuales';
       $document->DocMime = 'PDF';
       $document->DocOriginalName = 'test.PDF';
       $document->DocSize = 82;
       $document->DocGeneral = 0;
       $document->DocPublisher = 0;
       $document->users_id = 3;
       $document->save();


       $document = new Documents();
       $document->DocName = 'Logistica Doc';
       $document->DocSrc = '/images/default_temporal.pdf';
       $document->DocVersion = 'AC';
       $document->DocType = 'Manuales';
       $document->DocMime = 'PDF';
       $document->DocOriginalName = 'test.PDF';
       $document->DocSize = 82;
       $document->DocGeneral = 0;
       $document->DocPublisher = 0;
       $document->users_id = 3;
       $document->save(); 


       $document = new Documents();
       $document->DocName = 'Operaciones Doc';
       $document->DocSrc = '/images/default_temporal.pdf';
       $document->DocVersion = 'AC';
       $document->DocType = 'Manuales';
       $document->DocMime = 'PDF';
       $document->DocOriginalName = 'test.PDF';
       $document->DocSize = 82;
       $document->DocGeneral = 0;
       $document->DocPublisher = 0;
       $document->users_id = 3;
       $document->save();
    }
}
