<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Auth;
use DB;

class UsersImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function model(array  $row)
    {
        $user = User::whereMobile($row[1])->first();
        if(!$user) {
                User::create([
                    'name' => htmlspecialchars($row[0], ENT_QUOTES | ENT_XML1),
                    'mobile' => htmlspecialchars($row[1], ENT_QUOTES | ENT_XML1),
                    'type' => 'user',
                    'is_winner' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }

    public function rules(): array
    {
        return [
            ];
    }

    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }

    public function batchSize(): int
    {
        return 1;
    }

    public function chunkSize(): int
    {
        return 1;
    }
}
