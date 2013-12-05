<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addjobeetjob extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('jobeet_job', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'category_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'type' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'company' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'logo' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'url' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'position' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'location' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 4000,
             ),
             'how_to_apply' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 4000,
             ),
             'token' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'unique' => true,
              'length' => 255,
             ),
             'is_public' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 1,
              'length' => 25,
             ),
             'is_activated' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'email' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'expires_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('jobeet_job');
    }
}