<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Abstracts_List
 */
abstract class NF_Abstracts_List extends NF_Abstracts_Field
{
    protected $_name = '';

    protected $_group = 'standard_fields';

    public function __construct()
    {
    }

    public function template()
    {
        // This section intentionally left blank.
    }

    public function validate( $value )
    {
        parent::validate( $value );
    }

}