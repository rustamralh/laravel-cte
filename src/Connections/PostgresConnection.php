<?php

namespace Staudenmeir\LaravelCte\Connections;

use Illuminate\Database\PostgresConnection as Base;
use Staudenmeir\LaravelCte\Query\Grammars\PostgresGrammar as QueryGrammar;

class PostgresConnection extends Base
{
    use CreatesQueryBuilder;

    /**
     * Get the default query grammar instance.
     *
     * @return \Staudenmeir\LaravelCte\Query\Grammars\PostgresGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return new QueryGrammar($this);
    }
}
