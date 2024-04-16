<?php

namespace App\Repositories;

use App\Models\ContactInfo;

interface ContactInfoRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function delete(ContactInfo $contactInfo);
}