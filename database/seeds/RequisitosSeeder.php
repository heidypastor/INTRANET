<?php

use Illuminate\Database\Seeder;
use App\Requisitos;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Id = 01
        $requisito = new Requisitos();
        $requisito->ReqName = 'Decreto Ley 1076 de 2015 y/o normatividad ambiental vigente';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2015/05/26';
        $requisito->ReqEnte = 'Ministerio de Ambiente y Desarrollo Sostenible';
        $requisito->ReqQueDice = 'Su objetivo es compilar y racionalizar las normas de carácter reglamentario que rigen el sector Ambiente';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://corponor.gov.co/ACTOSJURIDICOS/NORMATIVIDAD/decreto1076.pdf';
        $requisito->save();


        // Id = 02
        $requisito = new Requisitos();
        $requisito->ReqName = 'Decreto 1556 de 1998';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '1998/08/04';
        $requisito->ReqEnte = ' ';
        $requisito->ReqQueDice = 'Por el cual se reglamenta la prestación del Servicio Público de Transporte Especial y de Turismo';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=14486';
        $requisito->save();


        // Id = 03
        $requisito = new Requisitos();
        $requisito->ReqName = 'Ley 769 de 2002';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2002/08/06';
        $requisito->ReqEnte = ' ';
        $requisito->ReqQueDice = 'Por el cual se reglamenta la prestación del Servicio Público de Transporte Especial y de Turismo';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=14486';
        $requisito->save();


        // Id = 04
        $requisito = new Requisitos();
        $requisito->ReqName = 'Ley 769 de 2002';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2002/08/06';
        $requisito->ReqEnte = ' ';
        $requisito->ReqQueDice = 'Reforma a la ley 769 de 2002 Codigo nacional de transito y se dictan otras disposiciones';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.simbogota.com.co/pdf/Leyes/2010_Ley_1383_Modifica_CNT_Ley7692002.pdf';
        $requisito->save();


        // Id = 05
        $requisito = new Requisitos();
        $requisito->ReqName = 'OHSAS 18001 de 2007';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2007/08/06';
        $requisito->ReqEnte = ' ';
        $requisito->ReqQueDice = 'La norma OHSAS 18001 de 2007 sirve para implementar un Sistema de Gestión de Seguridad y Salud en el Trabajo';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.nueva-iso-45001.com/2015/10/que-es-ohsas-18001-de-2007/';
        $requisito->save();


        // Id = 06
        $requisito = new Requisitos();
        $requisito->ReqName = 'ISO 14001:2004';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2004/12/01';
        $requisito->ReqEnte = ' Instituto  Colombiano  de  Normas  Técnicas  y  Certificació';
        $requisito->ReqQueDice = 'Requisitos con orientaciòn para su uso.';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'http://www.bogotaturismo.gov.co/sites/intranet.bogotaturismo.gov.co/files/NTC%20ISO14001%20DE%202004.pdf';
        $requisito->save();
    }
}