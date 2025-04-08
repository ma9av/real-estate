<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { display: flex; min-height: 100vh; }
        .sidebar { width: 200px; background: #343a40; padding-top: 1rem; }
        .sidebar a { color: #fff; display: block; padding: 10px; text-decoration: none; }
        .sidebar a:hover { background: #495057; }
        .content { flex-grow: 1; padding: 2rem; }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="/admin/dashboard"> Dashboard </a>
        <a href="/admin/property_management"> Property Manager</a>
        <a href="/admin/user_management"> User Manager</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#employeeTable').DataTable({
            processing: true,
            ajax: "{{ route('properties.data') }}",            
            columns: [
                { data: 'id' },
                { data: 'title' },
                { data: 'description' },
                { data: 'address' },
                { data: 'price' },
                { data: 'bedrooms' },
                { data: 'bathrooms' },
                { data: 'area' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        $('#userTable').DataTable({
            processing: true,
            ajax: "{{ route('properties.data') }}",            
            columns: [
                { data: 'id' },
                { data: 'title' },
                { data: 'description' },
                { data: 'address' },
                { data: 'price' },
                { data: 'bedrooms' },
                { data: 'bathrooms' },
                { data: 'area' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

    });
    </script>
  @stack('scripts')
</body>
</html>
