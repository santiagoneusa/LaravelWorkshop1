<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * ORDER ATRIBUTES
     * $this->atributes['id'] - int - contains the order primary key (id)
     * $this->attributes['address'] - string - contains the physical destination of the order
     * $this->attributes['creditCard'] - string - contains the number of the credit card the user payed with
     * $this->attributes['price'] - integer - contains the order total price
     * $this->attibutes['status'] - enum['Complete', 'Sent', 'Delivered']->default('Complete') - contains the state of the order
     * $this->attributes['created_at'] - timestamp - timestamp indicating order creation
     * $this->attributes['updated_at'] - timestamp - timestamp indicating last order update
     */
    protected $fillable = ['address', 'creditCard', 'price', 'status'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = $address;
    }

    public function getCreditCard(): string
    {
        return $this->attributes['creditCard'];
    }

    public function setCreditCard(string $creditCard): void
    {
        $this->attributes['creditCard'] = $creditCard;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice(int $price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getStatus(): string
    {
        return $this->attributes['status'];
    }

    public function setStatus(string $status): void
    {
        $this->attributes['status'] = $status;
    }

    public function getCreated_at(): string
    {
        return $this->attributes['created_at'];
    }

    public function setCreated_at(string $created_at): void
    {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdated_at(): string
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->attributes['updated_at'] = $updated_at;
    }
}
