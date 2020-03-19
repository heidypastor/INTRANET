<?php

use Illuminate\Database\Seeder;
use App\Documents;


class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // id = 01
       $document = new Documents();
       $document->DocName = 'Sistemas Doc';
       $document->DocSrc = '';
       $document->DocVersion = 'AC';
       $document->DocType = 'Formatos'; /*MANUALES O PROCEDIMIENTOS / INSTRUCTIVOS / FORMATOS*/
       $document->DocMime = 'PDF';
       $document->DocOriginalName = 'test.PDF';
       $document->DocSize = 82;
       $document->DocGeneral = 0;
       $document->DocPublisher = 0;
       $document->users_id = 3;
       $document->save();

              // id = 02
       $document = new Documents();
       $document->DocName = 'Sistemas Doc';
       $document->DocSrc = '';
       $document->DocVersion = 'AC';
       $document->DocType = 'Formatos'; /*MANUALES O PROCEDIMIENTOS / INSTRUCTIVOS / FORMATOS*/
       $document->DocMime = 'PDF';
       $document->DocOriginalName = 'test.PDF';
       $document->DocSize = 82;
       $document->DocGeneral = 0;
       $document->DocPublisher = 0;
       $document->users_id = 3;
       $document->save();
    }
}
