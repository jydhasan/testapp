<?php
// app/Services/TableCreatorService.php

namespace App\Services;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TableCreatorService
{
    public function createStudentsTable()
    {
        $tableName = 'students';

        // Check if the table already exists
        if (Schema::hasTable($tableName)) {
            return "Table '{$tableName}' already exists.";
        }

        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->date('date_of_birth');
            // Add other columns as needed
            $table->timestamps();
        });

        return "Table '{$tableName}' created successfully.";
    }

    // You can add methods for dropping tables, altering schema, etc.
}
