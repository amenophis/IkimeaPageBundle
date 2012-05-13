<?php

/*
* This file is part of the Ikimea page package.
*
* (c) Ikimea Pages <http://www.ikimea.com/>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/


namespace Ikimea\PageBundle\Model;

/**
 * @author Mbechezi Mlanawo <mlanawo.mbechezi@ikimea.com>
 */

class Zone implements ZoneInterface{

    protected $id;

    protected $name;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId(){

    }

    /**
     * @return string $name
     */
    public function getName(){
        $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name){
        $this->name = $name;
    }
}