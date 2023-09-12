
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
    <style>
        #graph{
            overflow-x:scroll;
            position: sticky;
            position:absolute;
            width:100%;
            height:100%;
            background-color:inherit;
        }
        canvas{
            position: absolute;
            width:90%;
            height:60%;
            margin-left:5%;
            margin-top:15px;
        }
    </style>
</head>
<body>
    <div id="graph"><canvas id="staffanalysis" aria-label="chart2"></canvas></div>
    <script src="graph.js"></script>
</body>
</html>