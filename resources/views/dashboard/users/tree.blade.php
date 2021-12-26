<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Collapsible Tree Example</title>

    <style>

        .node circle {
            fill: #fff;
            stroke: steelblue;
            stroke-width: 3px;
        }

        .node text {
            font: 12px sans-serif;
        }

        .link {
            fill: none;
            stroke: #ccc;
            stroke-width: 2px;
        }

    </style>

</head>

<body>
<!-- load the d3.js library -->
<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>
</div>

<script type="text/javascript" src="{{ asset('dashboard/js/tree.js') }}"></script>

</body>
</html>
