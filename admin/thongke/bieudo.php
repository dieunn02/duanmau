<div id="piechart" width="500px" height="500px" text-align:center></div>
<script type=" text/javascript" src="https://www.gstatic.com/charts/loader.js">
</script>
<script async>
window.onload = async () => {
    let chartLoader = await google.charts.load('current', {
        packages: ['corechart']
    });
    console.log(chartLoader)
    let callbackResult = google.charts.setOnLoadCallback(drawChart);
    // console.log(callbackResult)
    // Draw the chart and set the chart values
    console.log("Begin of draw chart")

    //
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
                $listthongke = loadall_thongke();
                $tongdm = count($listthongke);
                $i = 1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = [];
                    else $dauphay = ",";
                    echo " ['" . $thongke['tendm'] . ",', " . $thongke['countsp'] . "] ,";
                    $i += 1;
                }
                ?>
        ]);

        console.log(data)

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Thống kê theo danh mục',
            'width': 550,
            'height': 400
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

    console.log("End of draw chart")
}
</script>