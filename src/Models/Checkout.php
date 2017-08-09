<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:30
 */

namespace CampusWonders\Models;


class Checkout
{
    private $items = [];

    public function scan(ItemInterface $itemInterface)
    {
        if (!isset($this->items[$itemInterface->getName()])) {
            $this->items[$itemInterface->getName()] = [
                'count' => 1,
                'price' => $itemInterface->getPrice(1)
            ];
        } else {
            $this->items[$itemInterface->getName()]['count'] += 1;
            $this->items[$itemInterface->getName()]['price'] = $itemInterface->getPrice(
                $this->items[$itemInterface->getName()]['count']
            );
        }
    }

    public function checkout()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

}