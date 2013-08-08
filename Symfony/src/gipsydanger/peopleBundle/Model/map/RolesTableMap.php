<?php

namespace gipsydanger\peopleBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'roles' table.
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
class RolesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.gipsydanger.peopleBundle.Model.map.RolesTableMap';

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
        $this->setName('roles');
        $this->setPhpName('Roles');
        $this->setClassname('gipsydanger\\peopleBundle\\Model\\Roles');
        $this->setPackage('src.gipsydanger.peopleBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 30, null);
        $this->addColumn('role', 'Role', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Users', 'gipsydanger\\peopleBundle\\Model\\Users', RelationMap::ONE_TO_MANY, array('id' => 'role_id', ), null, null, 'Userss');
    } // buildRelations()

} // RolesTableMap
