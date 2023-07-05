<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>



    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-link:hover {
            background-color: #F6B923;
            border-right: 2px solid black;
            /* Adjust the border width and color as needed */
            border-radius: 20px 0 0 20px;
            /* Adjust the border-radius values as needed */
        }
    </style>

</head>

<body class="sb-nav-fixed" style="background: hsl(43, 66%, 66%)">

    @include('topnav')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            @include('sidebar')

        </div>
        <div id="layoutSidenav_content">

            <main>

            </main>

        </div>
    </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="assets/demo/chart-pie-demo.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>


    <script>
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        });
    </script>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar'); // Assuming you have a sidebar with the id "sidebar"

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show'); // Add a CSS class to show/hide the sidebar
        });
    </script>

</body>

</html>
