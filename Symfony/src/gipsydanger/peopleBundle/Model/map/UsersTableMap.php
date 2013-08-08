<?php

namespace gipsydanger\peopleBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.gipsydanger.peopleBundle.Model.map
 */
class UsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.gipsydanger.peopleBundle.Model.map.UsersTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('users');
        $this->setPhpName('Users');
        $this->setClassname('gipsydanger\\peopleBundle\\Model\\Users');
        $this->setPackage('src.gipsydanger.peopleBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('fname', 'Fname', 'VARCHAR', true, 25, null);
        $this->getColumn('fname', false)->setPrimaryString(true);
        $this->addColumn('lname', 'Lname', 'VARCHAR', true, 25, null);
        $this->getColumn('lname', false)->setPrimaryString(true);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 40, null);
        $this->addColumn('salt', 'Salt', 'VARCHAR', true, 32, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 60, null);
        $this->addColumn('is_active', 'IsActive', 'INTEGER', true, null, 1);
        $this->addForeignKey('role_id', 'RoleId', 'INTEGER', 'roles', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Roles', 'gipsydanger\\peopleBundle\\Model\\Roles', RelationMap::MANY_TO_ONE, array('role_id' => 'id', ), null, null);
    } // buildRelations()

} // UsersTableMap
