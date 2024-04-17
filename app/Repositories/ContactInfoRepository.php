<?php

namespace App\Repositories;

use App\Models\ContactInfo;
use App\Repositories\ContactInfoRepositoryInterface;

class ContactInfoRepository implements ContactInfoRepositoryInterface
{
    public function all()
    {
        return ContactInfo::all();
    }

    public function create(array $data)
    {
        return ContactInfo::create($data);
    }

    public function delete(ContactInfo $contactInfo)
    {
        return $contactInfo->delete();
    }
}