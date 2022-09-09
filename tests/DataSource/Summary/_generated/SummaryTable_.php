<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Summary\_generated;

use Atlas\Table\Table;
use Atlas\Mapper\DataSource\Summary\SummaryRow;
use Atlas\Mapper\DataSource\Summary\SummaryTableSelect;

/**
 * @method ?SummaryRow fetchRow(mixed $primaryVal)
 * @method SummaryRow[] fetchRows(array $primaryVals)
 * @method SummaryTableSelect select(array $whereEquals = [])
 * @method SummaryRow newRow(array $cols = [])
 * @method SummaryRow newSelectedRow(array $cols)
 */
abstract class SummaryTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'summaries';

    public const COLUMNS = [
        'summary_id' => [
            'name' => 'summary_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'thread_id' => [
            'name' => 'thread_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'reply_count' => [
            'name' => 'reply_count',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => 0,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'view_count' => [
            'name' => 'view_count',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => 0,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const PRIMARY_KEY = [
        'summary_id',    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'summary_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = SummaryRow;
}
