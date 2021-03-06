<?php

namespace Core;
/**
 * Abstract model
 *
 * Abstraction class for models used in aplication
 */
abstract class Model extends SQLQuery
{
/** @var string Stores model name */
    protected $_model;

/**
 * Constructor function for Model class
 *
 * Initiates connection to a database and adapts variables to current model
 */
    function __construct()
    {
        $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->_model = get_class($this);
    }

/**
 * Destructor function for Model class
 *
 * Disconnects from the database
 */
    function __destruct()
    {
        $this->disconnect();
    }
}