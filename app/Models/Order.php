<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['total'] - int - contains the order total
     * $this->attributes['date'] - date - contains the order date
     * $this->attributes['paid'] - boolean - contains the order paid status
     * $this->attributes['shipped'] - string - contains the order shipped status
     * $this->attributes['methodOfPayment'] - enum - contains the order method of payment (card, cash, bank)
    */

            
    protected $fillable = ['total','date','paid','shipped','methodOfPayment'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getTotal(): int
    {
        return $this->attributes['total'];
    }

    public function setTotal($total) : void
    {
        $this->attributes['total'] = $total;
    }

    public function getDate(): string
    {
        return $this->attributes['date'];
    }

    public function setDate($date) : void
    {
        $this->attributes['date'] = $date;
    }

    public function getPaid(): bool
    {
        return $this->attributes['paid'];
    }

    public function setPaid($paid) : void
    {
        $this->attributes['paid'] = $paid;
    }

    public function getShipped(): string
    {
        return $this->attributes['shipped'];
    }

    public function setShipped($shipped) : void
    {
        $this->attributes['shipped'] = $shipped;
    }

    public function getMethodOfPayment(): string
    {
        return $this->attributes['methodOfPayment'];
    }

    public function setMethodOfPayment($methodOfPayment) : void
    {
        $this->attributes['methodOfPayment'] = $methodOfPayment;
    }
}
