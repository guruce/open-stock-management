<?php

/**
 * SalesOrderTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SalesOrderTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SalesOrderTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SalesOrder');
    }
}