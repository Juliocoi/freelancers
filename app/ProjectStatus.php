<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';


    public function label(): string
    {
//        O mét0do match pode substituir o uso de vários if(ler sobre na documentação)
//        return match ($this) {
//            self::Open => 'Aceitando propostas',
//            self::Closed => 'encerrado',
//        };

        if ($this === self::Open) {
            return 'Aceitando propostas';
        }

        if ($this === self::Closed) {
            return 'encerrado';
        }
    }
}
