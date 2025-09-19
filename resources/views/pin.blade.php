<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Mailbox</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #007bff, #6610f2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            width: 380px;
            border-radius: 12px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-in-out;
        }
        .card h3 {
            font-weight: bold;
            color: #333;
        }
        .mailbox-icon {
            font-size: 50px;
            color: #0d6efd;
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }
        .btn-primary {
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control {
            border-radius: 8px;
            padding-right: 45px;
        }
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 8px;
            cursor: pointer;
            color: #6c757d;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: scale(0.95);}
            to {opacity: 1; transform: scale(1);}
        }
    </style>
</head>
<body>

    <div class="card">
        <i class="bi bi-envelope-lock-fill mailbox-icon"></i>
        <h3 class="text-center mb-3">🔒 Secure Mailbox</h3>
        <p class="text-center text-muted mb-3">Enter your 4-digit PIN to unlock</p>

        <!-- Error Message -->
        @if($errors->any())
            <div class="alert alert-danger py-2 text-center">
                <i class="bi bi-exclamation-triangle"></i> {{ $errors->first() }}
            </div>
        @endif

        <!-- PIN Form -->
        <form method="POST" action="{{ route('contact.verify') }}">
            @csrf
            <div class="mb-3 position-relative">
                <input type="password" name="pin" id="pinInput" class="form-control" placeholder="Enter PIN" maxlength="4" required>
                <i class="bi bi-eye-fill password-toggle" id="togglePin"></i>
            </div>
            <button class="btn btn-primary w-100">
                <i class="bi bi-unlock-fill"></i> Unlock Mailbox
            </button>
        </form>
    </div>

    <!-- Show/Hide Password Script -->
    <script>
        const togglePin = document.getElementById('togglePin');
        const pinInput = document.getElementById('pinInput');

        togglePin.addEventListener('click', () => {
            if (pinInput.type === "password") {
                pinInput.type = "text";
                togglePin.classList.remove("bi-eye-fill");
                togglePin.classList.add("bi-eye-slash-fill");
            } else {
                pinInput.type = "password";
                togglePin.classList.remove("bi-eye-slash-fill");
                togglePin.classList.add("bi-eye-fill");
            }
        });
    </script>

</body>
</html>
