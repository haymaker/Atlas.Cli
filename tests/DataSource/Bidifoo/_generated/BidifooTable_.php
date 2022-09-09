<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Bidifoo\_generated;

use Atlas\Table\Table;
use Atlas\Mapper\DataSource\Bidifoo\BidifooRow;
use Atlas\Mapper\DataSource\Bidifoo\BidifooTableSelect;

/**
 * @method ?BidifooRow fetchRow(mixed $primaryVal)
 * @method BidifooRow[] fetchRows(array $primaryVals)
 * @method BidifooTableSelect select(array $whereEquals = [])
 * @method BidifooRow newRow(array $cols = [])
 * @method BidifooRow newSelectedRow(array $cols)
 */
abstract class BidifooTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'bidifoos';

    public const COLUMNS = [
        'bidifoo_id' => [
            'name' => 'bidifoo_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'bidibar_id' => [
            'name' => 'bidibar_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'name' => [
            'name' => 'name',
            'type' => 'VARCHAR',
            'size' => 10,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const PRIMARY_KEY = [
        'bidifoo_id',    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'bidifoo_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = BidifooRow;
}
