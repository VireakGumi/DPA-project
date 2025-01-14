<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Role\RoleResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'display_name'      => $this->name,
            'username'          => $this->username,
            'email'             => $this->email,
            'is_email_verified' => $this->email_verified_at == null ? 0 : 1,
            'picture'           => asset('storage/pictures/' . $this->picture),
            'bio'               => $this->bio,
            'status'            => $this->status,
            'created_at'        => $this->created_at,
            'created_at_format' => Carbon::parse($this->created_at)->format('M d, Y'),
            'roles'             => RoleResource::collection($this->roles)
        ];
    }
}
