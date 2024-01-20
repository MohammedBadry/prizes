<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WinnersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
	    $searchText = request()->search_text;
		$winners = User::select('name', 'mobile', 'win_date')
        ->where(['type' => 'user', 'is_winner' => 1])
        ->when($searchText, function($query) use ($searchText) {
            $query->where('name', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('mobile', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('code', 'LIKE', '%'.$searchText.'%');
        })
        ->orderBy('win_date', 'desc')
        ->get();

        return $winners;
    }

    public function headings(): array
    {
        return [
            'الاسم',
            'رقم الجوال',
            'تاريخ الفوز'
        ];
    }
}
