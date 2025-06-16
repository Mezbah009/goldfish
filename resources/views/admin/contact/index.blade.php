@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Form Messages</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.contact.export') }}" class="btn btn-primary">Export to Excel</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Company Name</th>
                                <th class="px-4 py-2">Employee Count</th>
                                <th class="px-4 py-2">Message</th>
                                <th class="px-4 py-2">Action</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $message->name }}</td>
                                    <td class="px-4 py-2">{{ $message->email }}</td>
                                    <td class="px-4 py-2">{{ $message->phone }}</td>
                                    <td class="px-4 py-2">{{ $message->company_name }}</td>
                                    <td class="px-4 py-2">{{ $message->employee_count }}</td>
                                    <td class="px-4 py-2">{{ Str::limit($message->message, 50) }}</td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this message?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $messages->links() }}
                </div>

            </div>
        </div>
    </section>
@endsection
