<!doctype html>
<html lang="en">
    <head>
        <title>Product Records</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color:white;
                margin: 20px;
                padding: 20px;
            }
            h1 {
                margin-bottom: 20px;
                text-align: center;
            }
            .table-container {
                width: 100%;
                margin: 0 auto;
            }
            .table {
                width: 100%; /* Ensure full width in PDF */
                border-collapse: collapse;
            }
            .table thead th {
                background-color:blue;
                color: white;
                padding: 10px;
                text-align: center;
            }
            .table tbody td {
                padding: 8px;
                text-align: center;
                vertical-align: middle;
                border: 1px solid #000;
            }
            .table tbody tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <p class="text-center">{{ $date }}</p>
            <div class="table-container">
                <h1>{{ $title }}</h1>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ProductId</th>
                            <th>TrackingId</th>
                            <th>ProductName</th>
                            <th>ProductDescription</th>
                            <th>Productimage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->Trackingid }}</td>
                            <td>{{ $user->ProductName }}</td>
                            <td>{{ $user->ProductDescription}}</td>
                            <td><img height="50px" width="50%" src="ProductImages/{{ $user->ProductImage}}" alt=""></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

