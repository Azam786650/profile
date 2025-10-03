<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailbox</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }
        .mailbox-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .mailbox-header h2 {
            font-weight: bold;
            color: #333;
        }
        .table thead {
            background-color: #0d6efd;
            color: #fff;
        }
        .table tbody tr.unread {
            background-color: #e9f5ff !important;
            font-weight: 600;
        }
        .mailbox-icon {
            font-size: 28px;
            color: #0d6efd;
            margin-right: 8px;
        }
        .btn-lock {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            transition: 0.3s;
        }
        .btn-lock:hover {
            background-color: #b02a37;
        }
        .btn-home {
            background-color: #198754;
            border: none;
            color: white;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            transition: 0.3s;
        }
        .btn-home:hover {
            background-color: #146c43;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
<div class="container py-5">

    <!-- Mailbox Header -->
    <div class="mailbox-header">
        <h2><i class="bi bi-envelope-fill mailbox-icon"></i> Your Mailbox</h2>
        <div class="action-buttons">
            <!-- Back to Home -->
            <a href="{{ url('/') }}" class="btn btn-home">
                <i class="bi bi-house-door-fill"></i> Home
            </a>
            <!-- Lock Mailbox -->
            <a href="{{ route('contact.logout') }}" class="btn btn-lock">
                <i class="bi bi-lock-fill"></i> Lock Mailbox
            </a>
        </div>
    </div>

    <!-- Flash messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Messages Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $msg)
                            <tr class="{{ $msg->is_read ? '' : 'unread' }}">
                                <td>{{ $msg->id }}</td>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->message }}</td>
                                <td>{{ $msg->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('contact.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash-fill"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">📭 No messages found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</body>
</html>
