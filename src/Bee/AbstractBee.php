<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 15:58
 */

namespace CampusWonders\Bee;


abstract class AbstractBee
{
    protected $points;
    protected $hit_points;
    protected $status = true;

    public function __construct($points, $hit_points)
    {
        $this->points = $points;
        $this->hit_points = $hit_points;
    }

    /**
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    public function hit()
    {
        if($this->status === false){
            return false;
        }
        $this->points -= $this->hit_points;
        if($this->points <= 0){
            $this->points = 0;
            $this->status = false;
        }
    }

    /**
     * @return boolean
     */
    public function isStatus()
    {
        return $this->status;
    }


}