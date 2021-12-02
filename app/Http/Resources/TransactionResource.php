<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'category_id' => $this->category_id,
            'nama_kategori'=> 'Kategori '.$this->category->name,
            'tanggal_transaksi' => $this->tanggal_transaksi,
            'jumlah' => $this->jumlah / 100 . ' kg',
            'description' => $this->description,
            'created_at' => $this->created_at,
        ];
    }
}
