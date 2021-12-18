<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SavingResource extends JsonResource
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
            'category_id'=> $this->category_id,
            // 'nama_kategori'=> 'Kategori '.$this->category->name,
            'tanggal' => $this->tanggal,
            'jumlah_sampah_yang_dihasilkan' => $this->jumlah_sampah_yang_dihasilkan. ' Kantong',
            'created_at' => $this->created_at,
        ];
    }
}
