<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>welcome to admin panel</title>


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/dist/assets/app-f888e93a.css">
    @vite('resources/css/app.css')
    <style>
        .pagination-item {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            margin-right: 0.25rem;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        .pagination-item.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>


    <style>

        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568; /*text-gray-700*/
            margin-bottom: 10px;
            padding-left: 1rem; /*pl-4*/
            padding-right: 1rem; /*pl-4*/
            padding-top: .5rem; /*pl-2*/
            padding-bottom: .5rem; /*pl-2*/
            line-height: 1.25; /*leading-tight*/
            border-width: 2px; /*border-2*/
            border-radius: .25rem;
            border-color: #d3d7df; /*border-gray-200*/
            background-color: #edf2f7; /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff; /*bg-indigo-100*/
        }
        .dataTables_length{
            display: none;
             width: 80px; /* Adjust the width as needed */
        }
        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            display: none;
            font-weight: 700; /*font-bold*/
            border-radius: .25rem; /*rounded*/
            border: 1px solid transparent; /*border border-transparent*/
        }
        .dataTables_wrapper .dataTables_info{
            display: none;
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important; /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06); /*shadow*/
            font-weight: 700; /*font-bold*/
            border-radius: .25rem; /*rounded*/
            background: #4859a7 !important; /*bg-indigo-500*/
            border: 1px solid transparent; /*border border-transparent*/
        }

        .dataTables_filter input:hover,
        .dataTables_length select:hover {
            /* Add hover styles for filter and show entries */
            background-color: #dadada; /* bg-gray-100 */
            cursor: pointer;
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover span {
            color: #ffffff !important; /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06); /*shadow*/
            font-weight: 700; /*font-bold*/
            border-radius: .25rem; /*rounded*/
            background: #667eea !important; /*bg-indigo-500*/
            border: 1px solid transparent;
            text-decoration: none; /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0; /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
            background-color: #667eea !important; /*bg-indigo-500*/
        }
        @media (max-width: 767px) {
            .dataTables_wrapper {
                display: flex;
                flex-direction: column;
                align-items: start;
            }

            .dataTables_filter
            {
                order: -1; /* Moves these sections to the top */
                margin-bottom: 10px;
                padding-left: 10px;
            }
            .dataTables_length {
                order: -1; /* Moves these sections to the top */
                margin-bottom: 10px;
                padding-left: 15px;
            }

            .dataTables_paginate {
                margin-top: 10px;
            }
        }

    </style>
</head>

<body class="bg-gradient-to-r from-slate-50 via-purple-50 to-zinc-50">
<!-- drawer init and show -->
@include('backend.partial.navbar')


<div class="container mx-auto">
<!-- menu bar -->
@include('backend.partial.sidebar')


@yield('content')
</div>
<!-- drawer component -->
<!-- jQuery -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({

        }).columns.adjust()
            .responsive.recalc();
    })
</script>
<script src="public/dist/assets/app-4a08c204.js"></script>
@vite('resources/css/app.js')
@stack('js')
</body>

</html>
