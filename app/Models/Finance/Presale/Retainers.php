<?php

namespace App\Models\Finance\Presale;

use App\Models\Finance\Presale\RetainerItems;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retainers extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->hasOne('App\Models\Master\Client', 'id', 'client_id');
    }
    public function taxes()
    {
        return $this->hasOne('App\Models\Master\Tax', 'id', 'tax');
    }

    public function retainerItems()
    {
        return $this->hasMany(RetainerItems::class, 'retainer_id');
    }

    public function tax()
    {
        return $this->hasOne('App\Models\Master\Tax', 'id', 'tax_id');
    }

    public function getDue()
    {
        $due = 0;
        foreach ($this->payments as $payment) {
            $due += $payment->amount;
        }

        return ($this->getTotal() - $due);
    }

    public function getSubTotal()
    {
        $subTotal = 0;
        foreach ($this->items as $product) {
            $subTotal += ($product->price * $product->quantity);
        }

        return $subTotal;
    }

    public function getTotalTax()
    {
        $totalTax = 0;
        foreach ($this->items as $product) {
            $taxes = Utility::totalTaxRate($product->tax);

            $totalTax += ($taxes / 100) * ($product->price * $product->quantity);
        }

        return $totalTax;
    }

    public function getTotalDiscount()
    {
        $totalDiscount = 0;
        foreach ($this->items as $product) {
            $totalDiscount += $product->discount;
        }

        return $totalDiscount;
    }

    public function getTotal()
    {
        return ($this->getSubTotal() + $this->getTotalTax()) - $this->getTotalDiscount();
    }

    public static function customers($customer)
    {

        $categoryArr = explode(',', $customer);
        $unitRate = 0;
        foreach ($categoryArr as $customer) {
            if ($customer == 0) {
                $unitRate = '';
            } else {
                $customer = Customer::find($customer);
                $unitRate = $customer->name;
            }
        }

        return $unitRate;
    }

    public static function RetainerCategory($category)
    {
        $categoryArr = explode(',', $category);
        $categoryRate = 0;
        foreach ($categoryArr as $category) {
            $category = ProductServiceCategory::find($category);
            $categoryRate = $category->name;
        }

        return $categoryRate;
    }

    public function items()
    {
        return $this->hasMany('App\Models\Finance\Presale\RetainerItems', 'retainer_id', 'id');
    }
}
