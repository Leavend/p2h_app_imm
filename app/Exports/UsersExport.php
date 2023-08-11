<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'username',
            'nama',
            'email',
            'role',
            'Created_at',
            'Updated_at',
        ];
    }
    public function collection()
    {
        return User::where('role', '=', 'user')
            ->select('username', 'name', 'email', 'role', 'created_at', 'updated_at')
            ->get();
    }
}
