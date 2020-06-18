<?php
namespace MicrobeDemo\Model;
class User extends \Microbe\DB\Model {
    protected $dbResource = 'default';
    protected $tableName  = 'user';
    protected $mapping    = [
        'id'       => 'i',
        'name'     => 's',
        'passwd'   => 's',
        'location' => 's',
        'gender'   => 's',
        'province' => 's',
        'ctime'    => 'i',
        'score'    => 'i',
    ];
}