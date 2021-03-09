<?php
//Proteger nuestra pagina para las personas que no hayan iniciado session
    session_start();
   

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Please Log in");
                window.location = "../index.php";
            </script>
    ';
    session_destroy();
    die();
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<!--title-->
		<title>CCTv Viewer</title>
        <!--javascript-->
        <link rel="icon" href="../assets/images/icon.png">
        <script src="js/main.js"></script>       
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
        <script src="http://code.highcharts.com/stock/highstock.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <!--stylesheets-->
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/fontawesome/fontawesome.css" rel="stylesheet" />
        <link href="css/fontawesome/solid.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://rawcdn.githack.com/Edward-Alarco/skeleton_css/master/css/general-styles.css?token=ANLIZ2STSVMESRRCZIAG7US7XGXCG">
        <link href="charts.html"/>
		<!--metadata-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <!--header-->
        <div class="header">
                  <a class="logo" onclick="location.href='../bienvenida.php'">CCTv Viewer</a>
                  <div class="header-right">
                  <a class="headerbtn" href="../php/cerrar_sesion.php">Log Out</a>
            </div>
          </div>
    </head>
	<body onload="init()">

        <!-- Temperature Panels-->

<section class="four">
            
    <div class="container">
        
        <div class="row">
            
            <div class="col-3">

                <div class="kpi">
                        <div class="title titleoutside"><i class="fas fa-thermometer-half big-icon transparent-icon"></i>&nbsp Temperature Device 1</div>
                    <div class="kpichart kpicolorchartpanel">
                        <figure class="highcharts-figure container2">
                              <div id="container"></div>
                        </figure>
                    </div>
                </div>

               <div class="kpi">
                        <div class="title titleoutside"><i class="fas fa-thermometer-half big-icon transparent-icon"></i>&nbsp Temperature Device 2</div>
                        
                    <div class="kpichart kpicolorchartpanel">
                        <figure class="highcharts-figure">
                              <div id="container2"></div>
                        </figure>
                    </div>
                </div>

               <div class="kpi">
                        <div class="title titleoutside"><i class="fas fa-thermometer-half big-icon transparent-icon"></i>&nbsp Temperature Device 3</div>
                        
                    <div class="kpichart kpicolorchartpanel">
                        <figure class="highcharts-figure">
                              <div id="container3"></div>
                        </figure>
                    </div>
                </div>

               <div class="kpi">
                        <div class="title titleoutside"><i class="fas fa-thermometer-half big-icon transparent-icon"></i>&nbsp Temperature Device 4</div>
                        
                    <div class="kpichart kpicolorchartpanel">
                        <figure class="highcharts-figure">
                              <div id="container4"></div>
                        </figure>
                    </div>
                </div>
                
                <div class="tempdownloader">
                    <input type="button" class="button" value="Detailed Charts"
                           onclick="location.href='charts.php'">
                </div>
            
            <!--Download Button for Temperature Log-->
                <div class="tempdownloader">
                    <input type="button" class="button" value="Temperature Log">
                </div>
            </div>
            
            <!--  Central Camera Pain I mean panel-->

            <div class="col-6">
                <div>
                <div class="titlecentral titleoutsidecentral"><i class="fas fa-eye big-icon transparent-icon">
                    </i>&nbsp Camera</div>
                    <!--<iframe loop muted width="963" height="500" src="https://www.youtube.com/embed/8AjXhCbS_bg?list=RDvD7q_tWpFKw"  ></iframe> -->
                    <video class="video" id="slider" loop muted autoplay>
                            <source src="Videos/Black%20screen%2030%20seconds,%20no%20sounds,%20blank%20for%2030%20seconds%20YouTube%20video,%20HD.mp4"  type="video/mp4">
                    </video>
                </div>
                
            <!-- Preview 1st Cammera pain I mean panel-->
                <!-- Order from left to right 1...2...3...-->
                <div>
                    <video class=" video1 previews" loop muted autoplay onclick="videoUrl('Videos/2020-11-30%2001-36-04.mkv')" >
                            <source src="Videos/2020-11-30%2001-36-04.mkv"  type="video/mp4">
                    </video>
                
                
                    <video class=" video1 previews" loop muted autoplay onclick="videoUrl('Videos/2020-11-30%2001-32-57.mkv')">
                            <source src="Videos/2020-11-30%2001-32-57.mkv"  type="video/mp4">
                    </video>
                    
                    
                    <video class=" video1 previews" loop muted autoplay onclick="videoUrl('Videos/2020-11-30%2001-37-33.mkv')">
                            <source src="Videos/2020-11-30%2001-37-33.mkv"  type="video/mp4">
                    </video>
                
                </div>
                                  
                
            </div>
            
            <!--Switch video Script-->
            <script type="text/javascript">

                    function videoUrl(hmmm){
                            document.getElementById("slider").src = hmmm;
                            }
            </script>
            
            
            
            <!--  Right Door Pain I mean Panel-->
    <div class="col-3">
        
                <div class="rpanel1">
                                <div class="ptitle1 colorptitle1">
                                    <b class="fas fa-door-open bigdooricon1 iconp1">
                                    </b> &nbsp Door 1 Control
                                </div>
                                    <div class="pvalue1 colorvalue1">
                                        
                                        <div class="tsvalue1"><div class="tsvalue1"></div>
                                        <div class="tsvalue1">Out:  0121 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0222 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  0512 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0333 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  0223 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0094 Dept:QC Engeniering. </div>
                                        <div class="tsvalue1">Out:  0194 Dept:QC Engeniering. </div>

                                        </div>
                                    </div>
        </div>  
                <div class="rpanel1">
                                <div class="ptitle1 colorptitle1">
                                    <b class="fas fa-door-open bigdooricon1 iconp1">
                                    </b> &nbsp Door 2 Control
                                </div>
                                    <div class="pvalue1 colorvalue1">
                                        <div class="tsvalue1">Out:  1 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0331 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  2 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   3 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  3 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   4 Dept:QC Engeniering. </div>
                                        <div class="tsvalue1">Out:  4 Dept:QC Engeniering. </div>
                                    </div>
        </div>  
                <div class="rpanel1">
                                <div class="ptitle1 colorptitle1">
                                    <b class="fas fa-door-open bigdooricon1 iconp1">
                                    </b> &nbsp Door 3 Control
                                </div>
                                    <div class="pvalue1 colorvalue1">
                                        <div class="tsvalue1">Out:  0022 Dept:HR. </div>
                                        <div class="tsvalue1">In:   0071 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  0003 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0210 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  0331 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0014 Dept:QC Engeniering. </div>
                                        <div class="tsvalue1">Out:  0043 Dept:QC Engeniering. </div>
                                    </div>
                </div>
                
                <div class="rpanel1">
                                <div class="ptitle1 colorptitle1">
                                    <b class="fas fa-door-open bigdooricon1 iconp1">
                                    </b> &nbsp Door 4 Control
                                </div>
                                    <div class="pvalue1 colorvalue1">
                                        <div class="tsvalue1">Out:  0071 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0022 Dept:HR. </div>
                                        <div class="tsvalue1">Out:  0210 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0003 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">Out:  0113 Dept:Sistems Engeniering. </div>
                                        <div class="tsvalue1">In:   0043 Dept:QC Engeniering. </div>
                                        <div class="tsvalue1">Out:  0014 Dept:QC Engeniering. </div>
                                    </div>
                </div>
                
                <div class="tempdownloader">
                    <input type="button" class="button" value="Door Activity Log">
                </div>
            </div>
            <div><img class="map" src="SVG/Diagrama%20area%20de%20trabajo%20PARA%20SVG2.svg" />
                
                <div>
                    <!-- Acceso puerta 1 -->
                <svg class="inbutton1">
                        <circle cx="20mm" cy="20mm" r="4mm" style="fill: green; stroke: black; stroke-width: 0.1mm;" />
                </svg>
                </div>
                              
                    <!-- Acceso puerta 2 -->
                <div>
                <svg class="inbutton2">
                        <circle cx="20mm" cy="20mm" r="4mm" style="fill: green; stroke: black; stroke-width: 0.1mm;" />
                </svg>
                </div>
                
                <!-- Acceso puerta 3 -->
                <div>
                <svg class="inbutton3">
                        <circle cx="20mm" cy="20mm" r="4mm" style="fill: green; stroke: black; stroke-width: 0.1mm;" />
                </svg>
                </div>
                
                <!-- Acceso puerta 4 -->
                <div>
                <svg class="inbutton4">
                        <circle cx="20mm" cy="20mm" r="4mm" style="fill: green; stroke: black; stroke-width: 0.1mm;" />
                </svg>
                </div>
                
                
            </div>
        </div>
    </div>          
</section>
 
        

        
        
    </body>
</html>


























