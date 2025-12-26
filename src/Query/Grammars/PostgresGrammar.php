<?php

namespace Staudenmeir\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\PostgresGrammar as Base;
use Staudenmeir\LaravelCte\Query\Grammars\Traits\CompilesPostgresExpressions;

class PostgresGrammar extends Base implements ExpressionGrammar
{
    use CompilesPostgresExpressions;

    /**
     * Wrap a table in keyword identifiers.
     *
     * @param  \Illuminate\Contracts\Database\Query\Expression|string  $table
     * @param  string|null  $prefix
     * @return string
     */
    public function wrapTable($table, $prefix = null)
    {
        // Laravel 12 fix: Handle NULL connection in tests (DatabaseTransactions edge case)
        return parent::wrapTable($table, $prefix ?? ($this->connection ? null : ''));
    }
}
