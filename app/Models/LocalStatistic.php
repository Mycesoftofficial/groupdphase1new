<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalStatistic extends Model
{
    use HasFactory;

    protected $table = 'tbllocalstatistics';

    protected $fillable = [
        'RecYear',
        'RecMonth',
        'RecDate',
        'CMemM',
        'CMemF',
        'TCMem',
        'TMale',
        'TFem',
        'TTot',
        'YMale',
        'YFem',
        'YTot',
        'YotMM',
        'YotMF',
        'YotMT',
        'OTAM',
        'OTAF',
        'OTAT',
        'TAM',
        'OM',
        'M',
        'MW',
        'RM',
        'RMW',
        'ED',
        'D',
        'DC',
        'LL',
        'OR1',
        'ASW',
        'GS',
        'HUM',
        'MPWD',
        'NC',
        'HS',
        'OAHS',
        'TE',
        'YA',
        'OA',
        'TT',
        'T',
        'YAO',
        'OAA',
        'TTT',
        'BW',
        'BBF',
        'AD',
        'HCC',
        'HCM',
        'HCF',
        'HCTT',
        'HCMM',
        'BS',
        'BST',
        'MBS',
        'MBSH',
        'PBR',
        'ACA',
        'AMA',
        'ACAA',
        'ALS',
        'NCC',
        'NCR',
        'EVNC',
        'NCCH',
        'MIW',
        'WAA',
        'WCPM',
        'AA4WCPM',
        'HGP',
        'TOM',
        'BMM',
        'ACJS',
        'CDD',
        'CWC',
        'CBHS',
        'CBW',
        'CMT',
        'CAND',
        'CTTRI',
        'CTTRO',
        'Birth',
        'CDeath',
        'NClassesW',
        'NClassesM',
        'NClassesY',
        'NClassesE',
        'NClassesC',
        'AverageAW',
        'AverageAM',
        'AverageAY',
        'AverageAE',
        'AverageAC',
        'VisitMW',
        'VisitMM',
        'VisitMY',
        'VisitME',
        'VisitMC',
        '56HUM',
        '56MP',
        '57HUM',
        '57MP',
        '58HUM',
        '58MP',
        'Disab',
        '60a',
        '60b',
        '60c',
        '60d',
        '60e',
        '60f',
        '60g',
        '61a',
        '61b',
        '61c',
        '61d',
        '61di',
        '61dii',
        '61diii',
        '61div',
        '61e',
        '61fy',
        '61fn',
        '62a',
        '62b',
        '62c',
        '62d',
        '62e',
        '62f',
        '62g',
        '62h',
        '62oth',
        'ChurchID',
    ];

}
