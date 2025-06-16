<?php


namespace App\Exports;

use App\Models\ContactForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactFormExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return ContactForm::select('id', 'name', 'email', 'company_name', 'employee_count', 'message')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Company Name', 'Employee Count', 'Message'];
    }
}
