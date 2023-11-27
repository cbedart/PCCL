<?php
$host = 'localhost';
$dbname = 'postgres';
$user = 'xxxxxxxx';
$password = 'xxxxxxxx';
?>

<head>
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://www.thesgc.org/sites/default/files/favicons/favicon-32x32.png">
    <title>PCCL | Pan-Canadian Chemical Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/ccl.css">

    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script type="text/javascript" language="javascript"
        src="https://jsme-editor.github.io/dist/jsme/jsme.nocache.js"></script>

</head>

<body>
    <?php

    $substructure = "";
    if (isset($_GET['substructure']) & !empty($_GET['substructure'])) {
        $substructure = urldecode($_GET['substructure']);
    }

    $reactions = "0";
    if (isset($_GET['reactions']) & !empty($_GET['reactions'])) {
        $reactions = $_GET['reactions'];
    }

    $limit = 100;
    if (isset($_GET['limit']) & !empty($_GET['limit'])) {
        $limit = $_GET['limit'];
    }

    $mwmin = 300;
    if (isset($_GET['mwmin']) && !empty($_GET['mwmin'])) {
        $mwmin = $_GET['mwmin'];
    }

    $mwmax = 450;
    if (isset($_GET['mwmax']) && !empty($_GET['mwmax'])) {
        $mwmax = $_GET['mwmax'];
    }

    $hbamin = 0;
    if (isset($_GET['hbamin']) && !empty($_GET['hbamin'])) {
        $hbamin = $_GET['hbamin'];
    }

    $hbamax = 10;
    if (isset($_GET['hbamax']) && !empty($_GET['hbamax'])) {
        $hbamax = $_GET['hbamax'];
    }

    $hbdmin = 0;
    if (isset($_GET['hbdmin']) && !empty($_GET['hbdmin'])) {
        $hbdmin = $_GET['hbdmin'];
    }

    $hbdmax = 10;
    if (isset($_GET['hbdmax']) && !empty($_GET['hbdmax'])) {
        $hbdmax = $_GET['hbdmax'];
    }

    $logpmin = -3;
    if (isset($_GET['logpmin']) && !empty($_GET['logpmin'])) {
        $logpmin = $_GET['logpmin'];
    }

    $logpmax = 5;
    if (isset($_GET['logpmax']) && !empty($_GET['logpmax'])) {
        $logpmax = $_GET['logpmax'];
    }

    $rotbmin = 0;
    if (isset($_GET['rotbmin']) && !empty($_GET['rotbmin'])) {
        $rotbmin = $_GET['rotbmin'];
    }

    $rotbmax = 10;
    if (isset($_GET['rotbmax']) && !empty($_GET['rotbmax'])) {
        $rotbmax = $_GET['rotbmax'];
    }

    $tpsamin = 0;
    if (isset($_GET['tpsamin']) && !empty($_GET['tpsamin'])) {
        $tpsamin = $_GET['tpsamin'];
    }

    $tpsamax = 140;
    if (isset($_GET['tpsamax']) && !empty($_GET['tpsamax'])) {
        $tpsamax = $_GET['tpsamax'];
    }

    $fsp3min = 0;
    if (isset($_GET['fsp3min']) && !empty($_GET['fsp3min'])) {
        $fsp3min = $_GET['fsp3min'];
    }

    $fsp3max = 1;
    if (isset($_GET['fsp3max']) && !empty($_GET['fsp3max'])) {
        $fsp3max = $_GET['fsp3max'];
    }

    $qedmin = 0.7;
    if (isset($_GET['qedmin']) && !empty($_GET['qedmin'])) {
        $qedmin = $_GET['qedmin'];
    }

    $qedmax = 1;
    if (isset($_GET['qedmax']) && !empty($_GET['qedmax'])) {
        $qedmax = $_GET['qedmax'];
    }


    function sanitizeNumeric($value, $min, $max)
    {
        $numericValue = floatval($value);
        $sanitizedValue = max(min($numericValue, $max), $min);
        return $sanitizedValue;
    }

    function sanitizeString($input)
    {
        $sanitizedInput = strip_tags($input);
        $sanitizedInput = htmlspecialchars($sanitizedInput, ENT_QUOTES, 'UTF-8');
        return $sanitizedInput;
    }

    ?>


    <?php
    ////////////////////////////////////////////////////////////////////////////////////
    // Corentin BEDART - SGC - August 2023
    // Script to download as a CSV file the query compounds
    ////////////////////////////////////////////////////////////////////////////////////

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            // Connect to the PostgreSQL database
            $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

            // Setup
            $reactions_array = ["0" => "reaction1_lipinski", "1" => "reaction2_lipinski", "2" => "reaction4_lipinski", "3" => "reaction5_lipinski", "4" => "reaction6_lipinski", "5" => "reaction8_lipinski"];
            $base_select_query = "mol_to_smiles(product),product_code,molweight,logp,hba,hbd,rotb,tpsa,fsp3,qed,reagenta,reagentb";

            // Sanitize
            $mwmin = sanitizeNumeric($mwmin, 0, 500);
            $mwmax = sanitizeNumeric($mwmax, 0, 500);
            $logpmin = sanitizeNumeric($logpmin, -5, 5);
            $logpmax = sanitizeNumeric($logpmax, -5, 5);
            $hbamin = sanitizeNumeric($hbamin, 0, 10);
            $hbamax = sanitizeNumeric($hbamax, 0, 10);
            $hbdmin = sanitizeNumeric($hbdmin, 0, 5);
            $hbdmax = sanitizeNumeric($hbdmax, 0, 5);
            $rotbmin = sanitizeNumeric($rotbmin, 0, 10);
            $rotbmax = sanitizeNumeric($rotbmax, 0, 10);
            $tpsamin = sanitizeNumeric($tpsamin, 0, 140);
            $tpsamax = sanitizeNumeric($tpsamax, 0, 140);
            $fsp3min = sanitizeNumeric($fsp3min, 0, 1);
            $fsp3max = sanitizeNumeric($fsp3max, 0, 1);
            $qedmin = sanitizeNumeric($qedmin, 0, 1);
            $qedmax = sanitizeNumeric($qedmax, 0, 1);
            $limit = sanitizeNumeric($limit, 0, 100000);
            $substructure = sanitizeString($substructure);
            $reactions = sanitizeString($reactions);

            ////////////////////////////////////////////////////////////////////////////////////
            // Selecting chemical reactions - Default reaction 1
            $reactions_split = explode("-", $reactions, 99);
            $reactions_selected = [];
            foreach ($reactions_split as $i) {
                array_push($reactions_selected, $reactions_array[$i]);
            }

            ////////////////////////////////////////////////////////////////////////////////////
            // Reactions - Default "" if only 1 reaction selected
            $reactions_query = "";

            if (count($reactions_selected) > 1) {
                // $reactions_query = "AND product @> '".$substructure."'";
                for ($i = 1; $i < count($reactions_selected); $i++) {
                    $reactions_query = $reactions_query . "UNION ALL SELECT " . $base_select_query . " FROM " . $reactions_selected[$i] . " ";
                }
            } else {
                $reactions_query = "";
            }
            ;

            ////////////////////////////////////////////////////////////////////////////////////
            // Substructure - Default ""
            if (strlen($substructure) > 0) {
                $substructure_selected = "AND product @> '" . $substructure . "'";
            } else {
                $substructure_selected = "";
            }
            ;
            
            ////////////////////////////////////////////////////////////////////////////////////
            // Query if the user wants a selection of X compounds, with X as $limit
            if (isset($_POST['withLimit'])) {
                $query = "SELECT " . $base_select_query . "
                    FROM " . $reactions_selected[0] . "
                    " . $reactions_query . "
                    WHERE (molweight BETWEEN " . $mwmin . " AND " . $mwmax . ")
                    AND (logp BETWEEN " . $logpmin . " AND " . $logpmax . ")
                    AND (hba BETWEEN " . $hbamin . " AND " . $hbamax . ")
                    AND (hbd BETWEEN " . $hbdmin . " AND " . $hbdmax . ")
                    AND (rotb BETWEEN " . $rotbmin . " AND " . $rotbmax . ")
                    AND (tpsa BETWEEN " . $tpsamin . " AND " . $tpsamax . ")
                    AND (fsp3 BETWEEN " . $fsp3min . " AND " . $fsp3max . ")
                    AND (qed BETWEEN " . $qedmin . " AND " . $qedmax . ")
                    " . $substructure_selected . "
                    LIMIT " . $limit;

            }

            ////////////////////////////////////////////////////////////////////////////////////
            // Query if the user wants all the compounds
            // The code is working properly, but the SGC cluster can't manage it

            if (isset($_POST['withoutLimit'])) {
                $query = "SELECT " . $base_select_query . "
                    FROM " . $reactions_selected[0] . "
                    " . $reactions_query . "
                    WHERE (molweight BETWEEN " . $mwmin . " AND " . $mwmax . ")
                    AND (logp BETWEEN " . $logpmin . " AND " . $logpmax . ")
                    AND (hba BETWEEN " . $hbamin . " AND " . $hbamax . ")
                    AND (hbd BETWEEN " . $hbdmin . " AND " . $hbdmax . ")
                    AND (rotb BETWEEN " . $rotbmin . " AND " . $rotbmax . ")
                    AND (tpsa BETWEEN " . $tpsamin . " AND " . $tpsamax . ")
                    AND (fsp3 BETWEEN " . $fsp3min . " AND " . $fsp3max . ")
                    AND (qed BETWEEN " . $qedmin . " AND " . $qedmax . ")
                    " . $substructure_selected;
            }

            ////////////////////////////////////////////////////////////////////////////////////
            // Fetch the data
            $stmt = $pdo->query($query);
            $stmt = $pdo->prepare($query);
            $stmt->bindValue(':data', $inputData, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Clear the output buffer to avoid including the HTML code
            ob_clean();

            // Set appropriate headers for CSV 
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="pccl_selection.csv"');

            // File handler to write CSV data
            $output = fopen('php://output', 'w');

            // Write CSV headers
            fputcsv($output, array_keys($rows[0]));

            // Write CSV data
            foreach ($rows as $row) {
                fputcsv($output, $row);
            }

            exit();
    
        } catch (PDOException $e) {
            // Handle any database-related errors here
            die("Database error: " . $e->getMessage());
        }
    }
    ?>

    <script>
        //this function will be called after the JavaScriptApplet code has been loaded.
        function jsmeOnLoad() {
            jsmeApplet = new JSApplet.JSME("jsme_container", "100%", "300px", {
                "options": "oldlook,marker,markAtomOnly,canonize"
            });

            jsmeApplet.setCallBack("AfterStructureModified", show_smiles);
            document.getElementById("smiles_container").value = "<?php echo $substructure; ?>";
            jsmeApplet.readGenericMolecularInput(document.getElementById("smiles_container").value);
            //jsmeApplet.setNotifyStructuralChangeJSfunction("show_smiles");
        }

        var patt = /\[([A-Za-z][a-z]?)H?\d*:\d+\]/g; //regexp pattern for numbered atom
        function show_smiles(event) {
            smiles = event.src.smiles(); //atom that are colored are numbered
            new_smiles = smiles.replace(patt, '<em>$1</em>');
            document.getElementById("smiles_container").value = new_smiles
        }

        function readAnyFromTextArea() {
            jsmeApplet.readGenericMolecularInput(document.getElementById("smiles_container").value);
        }


    </script>

    <?php $path = $_SERVER['DOCUMENT_ROOT'];
    include_once($path . "/header.html"); ?>

    <div class="container-fluid">
        <!-- <div class="row" style="margin:0px;"> -->
        <div class="row">
            <!-- <div class="col-xs-auto col-md-2 col-xl-4" style="margin-left:25px;padding:0px;"> -->
            <div class="col-lg-4">

                <div class="container text-center vcenter align-middle"
                    style="padding-right:5%;padding-left:5%;margin-bottom:10px;">
                    <div>
                        <a class="btn text-center vcenter align-middle" href="#" onclick="gogogo()" role="button"
                            style="vertical-align:middle;padding:0px;width:60%;height:40px;line-height:35px;font-size:20px;">Update
                            the selection</a>
                    </div>
                </div>

                <div class="container border border-dark-subtle container-ccl"
                    style="padding-right:5%;padding-left:5%;margin-bottom:10px;">
                    <div class="row align-items-center">
                        <div class="text-right col-6 border-end border-dark-subtle" style="margin-top:5px;">
                            <div class="text-center vcenter"><b><a href="https://sites.chem.utoronto.ca/bateylab/"
                                        class='text-reset' target='_blank'>Batey Lab - Toronto</a></b></div>
                            <div class="form-check form-switch btn-dark">
                                <input class="form-check-input text-left" type="checkbox" value="" id="imides">
                                <label class="form-check-label me-auto" for="imides">Imides</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" data-onstyle="danger"
                                    id="aminothiatriazoles">
                                <label class="form-check-label" for="aminothiatriazoles">Aminothiatriazoles</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" data-onstyle="danger"
                                    id="aminotetrazoles">
                                <label class="form-check-label" for="aminotetrazoles">Aminotetrazoles</label>
                            </div>
                        </div>

                        <div class="text-right col-6" style="margin-top:5px;">
                            <div class="text-center vcenter"><b><a href="https://tabithaewood.wixsite.com/website"
                                        class='text-reset' target='_blank'>Wood Lab - Winnipeg</a></b></div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="trucesmiles">
                                <label class="form-check-label me-auto" for="trucesmiles">Truce-Smiles</label>
                            </div>
                            <div class="text-center vcenter"><b><a href="https://westgroup.chem.ualberta.ca/"
                                        class='text-reset' target='_blank'>The West Group - Alberta</a></b></div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="west2+2">
                                <label class="form-check-label me-auto"
                                    for="2+2_cycloaddition">[2+2]-cycloaddition</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="west4+2">
                                <label class="form-check-label me-auto"
                                    for="4+2_cycloaddition">[4+2]-cycloaddition</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container align-middle border border-dark-subtle align-items-center text-center vcenter container-ccl"
                    style="padding-right:5%;padding-left:5%;padding-top:10px;">
                    <div style="margin-top:5px;">
                        <label for="slider-limit-value">Number of compounds displayed :</label>
                        <input type="text" class="slider-ccl" id="slider-limit-value" readonly>
                        <div id="slider-limit"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-mw-values">Molecular weight :</label>
                        <input type="text" class="slider-ccl" id="slider-mw-values" readonly>
                        <div id="slider-mw"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-hba-values">Hydrogen bond acceptors :</label>
                        <input type="text" class="slider-ccl" id="slider-hba-values" readonly>
                        <div id="slider-hba"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-hbd-values">Hydrogen bond donors :</label>
                        <input type="text" class="slider-ccl" id="slider-hbd-values" readonly>
                        <div id="slider-hbd"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-logp-values">cLogP :</label>
                        <input type="text" class="slider-ccl" id="slider-logp-values" readonly>
                        <div id="slider-logp"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-rotb-values">Rotatable bonds :</label>
                        <input type="text" class="slider-ccl" id="slider-rotb-values" readonly>
                        <div id="slider-rotb"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-tpsa-values">TPSA :</label>
                        <input type="text" class="slider-ccl" id="slider-tpsa-values" readonly>
                        <div id="slider-tpsa"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-fsp3-values">Fsp3 :</label>
                        <input type="text" class="slider-ccl" id="slider-fsp3-values" readonly>
                        <div id="slider-fsp3"></div>
                    </div>

                    <div style="margin-top:5px;">
                        <label for="slider-qed-values">QED :</label>
                        <input type="text" class="slider-ccl" id="slider-qed-values" readonly>
                        <div id="slider-qed"></div>
                    </div>

                    <div id="jsme_container" style="margin-top:15px;"></div>
                    <label for="smiles_container" class="form-label">Substructure : </label>
                    <input id="smiles_container" onchange="readAnyFromTextArea();" type="text" class="form-label"
                        style="font-weight:bold;">

                    <br />

                </div>
                <div class="container align-middle container-ccl" style="padding:0px;margin-top:10px;">
                    <table class="table text-center align-middle table-bordered border-dark-subtle"
                        style="margin:0px;width:100%;font-size:12px">
                        <thead>
                            <tr>
                                <th scope="col" style="width:20%">Name</th>
                                <th scope="col" style="width:80%">Chemical reaction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Imides</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img src="Imides.svg"
                                        width="100%"></img></td>
                            </tr>
                            <tr>
                                <td>Aminothiatriazoles</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img
                                        src="Aminothiatriazoles.svg" width="100%"></img></td>
                            </tr>
                            <tr>
                                <td>Aminotetrazoles</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img
                                        src="Aminotetrazoles.svg" width="100%"></img></td>
                            </tr>
                            <tr>
                                <td>Truce-Smiles</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img src="Truce-Smiles.svg"
                                        width="100%"></img></td>
                            </tr>
                            <tr>
                                <td>[2+2]-cycloaddition</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img src="2+2_cycloaddition.svg"
                                        width="100%"></img></td>
                            </tr>
                            <tr>
                                <td>[4+2]-cycloaddition</td>
                                <td style="padding:8px;padding-top:2px;padding-bottom:2px;"><img src="4+2_cycloaddition.svg"
                                        width="100%"></img></td>
                            </tr>
                        </tbody>
                    </table>



                </div>

                <!-- <div class="container text-center vcenter align-middle container-ccl" style="padding-right:5%;padding-left:5%;margin-top:10px;">
            <form method="post">
                <input type="submit" name="download_csv" value="Download selection<br>as CSV file" class="btn text-center vcenter align-middle" style="white-space: normal;vertical-align:middle;padding:0px;width:60%;height:40px;line-height:35px;font-size:20px;">
            </form>
        </div> -->
                <div class="container text-center vcenter align-middle"
                    style="padding-right:5%;padding-left:5%;margin-top:10px;">
                    <form method="post">
                        <!-- <button type="submit" class="col-5 btn" style="font-size:10px;" name="withoutLimit">
                        Download all matching compounds<br />
                        as CSV file
                </button> -->

                        <button type="submit" class="col-10 btn" style="font-size:12px;" name="withLimit">
                            Download the
                            <?php echo $limit; ?> matching compounds<br />
                            as CSV file
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-8 text-center">
                <!-- <div class="col text-center" style="margin-right:25px;padding:0px;padding-left:20px;"> -->
                <table class='table text-center border border-dark-subtle align-middle'>
                    <thead>
                        <tr>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;' width="200px">
                                Molecule</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>MW</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>LogP</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>HBA</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>HBD</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>RotB</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>TPSA</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>Fsp3</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>QED</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>Reagent A</th>
                            <th scope="col" class='border border-dark-subtle' style='font-size:14px;'>Reagent B</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        ////////////////////////////////////////////////////////////////////////////////////
                        // Corentin BEDART - SGC - April 2023
                        // Script to display PostgreSQL query results to HTML tables
                        ////////////////////////////////////////////////////////////////////////////////////

                        // Connect to the PostgreSQL database
                        $dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$password")
                            or die('Could not connect');

                        // Setup
                        $reactions_array = ["0" => "reaction1_lipinski", "1" => "reaction2_lipinski", "2" => "reaction4_lipinski", "3" => "reaction5_lipinski", "4" => "reaction6_lipinski", "5" => "reaction8_lipinski"];
                        $base_select_query = "mol_to_svg(product,'',250,100),molweight,logp,hba,hbd,rotb,tpsa,fsp3,qed,reagenta,reagentb";

                        // Sanitize
                        $mwmin = sanitizeNumeric($mwmin, 0, 500);
                        $mwmax = sanitizeNumeric($mwmax, 0, 500);
                        $logpmin = sanitizeNumeric($logpmin, -5, 5);
                        $logpmax = sanitizeNumeric($logpmax, -5, 5);
                        $hbamin = sanitizeNumeric($hbamin, 0, 10);
                        $hbamax = sanitizeNumeric($hbamax, 0, 10);
                        $hbdmin = sanitizeNumeric($hbdmin, 0, 5);
                        $hbdmax = sanitizeNumeric($hbdmax, 0, 5);
                        $rotbmin = sanitizeNumeric($rotbmin, 0, 10);
                        $rotbmax = sanitizeNumeric($rotbmax, 0, 10);
                        $tpsamin = sanitizeNumeric($tpsamin, 0, 140);
                        $tpsamax = sanitizeNumeric($tpsamax, 0, 140);
                        $fsp3min = sanitizeNumeric($fsp3min, 0, 1);
                        $fsp3max = sanitizeNumeric($fsp3max, 0, 1);
                        $qedmin = sanitizeNumeric($qedmin, 0, 1);
                        $qedmax = sanitizeNumeric($qedmax, 0, 1);
                        $limit = sanitizeNumeric($limit, 0, 100000);
                        $substructure = sanitizeString($substructure);
                        $reactions = sanitizeString($reactions);

                        // Selecting chemical reactions - Default reaction 1
                        $reactions_split = explode("-", $reactions, 99);
                        $reactions_selected = [];
                        foreach ($reactions_split as $i) {
                            array_push($reactions_selected, $reactions_array[$i]);
                        }

                        ////////////////////////////////////////////////////////////////////////////////////
                        // Reactions - Default "" if only 1 reaction selected
                        $reactions_query = "";

                        if (count($reactions_selected) > 1) {
                            // $reactions_query = "AND product @> '".$substructure."'";
                            for ($i = 1; $i < count($reactions_selected); $i++) {
                                $reactions_query = $reactions_query . "UNION ALL SELECT " . $base_select_query . " FROM " . $reactions_selected[$i] . " ";
                            }
                        } else {
                            $reactions_query = "";
                        }
                        ;

                        ////////////////////////////////////////////////////////////////////////////////////
                        // Substructure - Default ""
                        if (strlen($substructure) > 0) {
                            $substructure_selected = "AND product @> '" . $substructure . "'";
                        } else {
                            $substructure_selected = "";
                        }
                        ;

                        ////////////////////////////////////////////////////////////////////////////////////
                        // Query
                        $query = "SELECT " . $base_select_query . "
                        FROM " . $reactions_selected[0] . "
                        " . $reactions_query . "
                        WHERE (molweight BETWEEN " . $mwmin . " AND " . $mwmax . ")
                        AND (logp BETWEEN " . $logpmin . " AND " . $logpmax . ")
                        AND (hba BETWEEN " . $hbamin . " AND " . $hbamax . ")
                        AND (hbd BETWEEN " . $hbdmin . " AND " . $hbdmax . ")
                        AND (rotb BETWEEN " . $rotbmin . " AND " . $rotbmax . ")
                        AND (tpsa BETWEEN " . $tpsamin . " AND " . $tpsamax . ")
                        AND (fsp3 BETWEEN " . $fsp3min . " AND " . $fsp3max . ")
                        AND (qed BETWEEN " . $qedmin . " AND " . $qedmax . ")
                        " . $substructure_selected . "
                        LIMIT " . $limit;

                        $result = pg_query($dbconn, $query) or die("Query failed: " . pg_last_error());

                        ////////////////////////////////////////////////////////////////////////////////////
                        // Printing results in HTML
                        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                            echo "\t<tr style='height: 25px;' class='border border-dark-subtle'>\n";
                            foreach ($line as $col_key => $col_value) {
                                if ($col_key == "reagenta" or $col_key == "reagentb") {
                                    echo "\t\t<td class='border border-dark-subtle' style='font-size:14px;'><a class='text-reset' href='https://zinc20.docking.org/substances/ZINC$col_value' target='_blank'>$col_value</a></td>\n";
                                } else {
                                    echo "\t\t<td class='border border-dark-subtle' style='font-size:14px;'>$col_value</td>\n";
                                }
                            }
                            echo "\t</tr>\n";
                        }

                        ////////////////////////////////////////////////////////////////////////////////////
                        // Free results and close connection
                        pg_free_result($result);
                        pg_close($dbconn);
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br />
    <br />


    <script>

        function reactions_load() {
            // const reactionsIDs = ["imides", "aminothiatriazoles", "toronto3", "aminotetrazoles", "trucesmiles"];
            // const reactionsIDs_numbers = ["0", "1", "2", "3", "4"];
            const reactionsIDs = ["imides", "aminothiatriazoles", "aminotetrazoles", "trucesmiles", "west2+2", "west4+2"];
            const reactionsIDs_numbers = ["0", "1", "2", "3", "4", "5"];
            const reactionsIDs_selected = "<?php echo $reactions; ?>";
            for (let i = 0; i < reactionsIDs.length; i++) {
                document.getElementById(reactionsIDs[i]).checked = reactionsIDs_selected.includes(reactionsIDs_numbers[i]);
            }
        }

        reactions_load();

        function href_generator(href_string, name_value, new_value, default_value) {
            if (new_value != default_value) {

                // if(href_string.substring(href_string.length - 4) == ".php"){
                if (href_string == "/") {
                    return href_string + "?" + name_value + "=" + new_value
                } else {
                    return href_string + "&" + name_value + "=" + new_value
                }
            } else {
                return href_string
            }
        }

        // Selection of reactions
        function reactionsSelect() {
            // const reactionsIDs = ["imides", "aminothiatriazoles", "toronto3", "aminotetrazoles", "trucesmiles"]
            const reactionsIDs = ["imides", "aminothiatriazoles", "aminotetrazoles", "trucesmiles", "west2+2", "west4+2"];
            let reactionsString = ""
            for (let i = 0; i < reactionsIDs.length; i++) {
                if (document.getElementById(reactionsIDs[i]).checked) {
                    if (reactionsString.length == 0) {
                        reactionsString += String(i);
                    } else {
                        reactionsString += "-" + String(i);
                    }
                }
            }
            return reactionsString;
        }

        // Update
        function gogogo() {
            let href_string = "/"
            href_string = href_generator(href_string, "limit", $("#slider-limit").slider("value"), 100);

            let reactions_string = reactionsSelect();
            if (reactions_string.length != 0 || reactions_string != "0") {
                href_string = href_generator(href_string, "reactions", reactions_string, "0");
            }

            href_string = href_generator(href_string, "substructure", encodeURIComponent(document.getElementById("smiles_container").value), "");

            href_string = href_generator(href_string, "mwmin", $("#slider-mw").slider("values", 0), 300);
            href_string = href_generator(href_string, "mwmax", $("#slider-mw").slider("values", 1), 450);

            href_string = href_generator(href_string, "hbamin", $("#slider-hba").slider("values", 0), 0);
            href_string = href_generator(href_string, "hbamax", $("#slider-hba").slider("values", 1), 10);

            href_string = href_generator(href_string, "hbdmin", $("#slider-hbd").slider("values", 0), 0);
            href_string = href_generator(href_string, "hbdmax", $("#slider-hbd").slider("values", 1), 5);

            href_string = href_generator(href_string, "logpmin", $("#slider-logp").slider("values", 0), -3);
            href_string = href_generator(href_string, "logpmax", $("#slider-logp").slider("values", 1), 5);

            href_string = href_generator(href_string, "logpmin", $("#slider-logp").slider("values", 0), -3);
            href_string = href_generator(href_string, "logpmax", $("#slider-logp").slider("values", 1), 5);

            href_string = href_generator(href_string, "rotbmin", $("#slider-rotb").slider("values", 0), 0);
            href_string = href_generator(href_string, "rotbmax", $("#slider-rotb").slider("values", 1), 10);

            href_string = href_generator(href_string, "tpsamin", $("#slider-tpsa").slider("values", 0), 0);
            href_string = href_generator(href_string, "tpsamax", $("#slider-tpsa").slider("values", 1), 140);

            href_string = href_generator(href_string, "fsp3min", $("#slider-fsp3").slider("values", 0), 0);
            href_string = href_generator(href_string, "fsp3max", $("#slider-fsp3").slider("values", 1), 1);

            href_string = href_generator(href_string, "qedmin", $("#slider-qed").slider("values", 0), 0.7);
            href_string = href_generator(href_string, "qedmax", $("#slider-qed").slider("values", 1), 1);

            window.location.href = href_string;
        }



        // Resize input tags
        function resizeInput() {
            this.style.width = 1 + this.value.length + "ch";
        };

        // Limit
        $(function () {
            var input = document.querySelector('#slider-limit-value');
            input.addEventListener('#slider-limit-value', resizeInput);
            $("#slider-limit").slider({
                range: "min",
                min: 0,
                max: 1000,
                value: <?php echo $limit; ?>,
                step: 50,
                slide: function (event, ui) {
                    $("#slider-limit-value").val(ui.value);
                    resizeInput.call(input);
                }
            });
            $("#slider-limit-value").val($("#slider-limit").slider("value"));
            $("#slider-limit-value").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

        // MW

        $(function () {
            var input = document.querySelector('#slider-mw-values');
            input.addEventListener('#slider-mw-values', resizeInput);
            $("#slider-mw").slider({
                range: true,
                min: 100,
                max: 500,
                values: [<?php echo $mwmin; ?>, <?php echo $mwmax; ?>],
                step: 10,
                slide: function (event, ui) {
                    $("#slider-mw-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-mw-values").val($("#slider-mw").slider("values", 0) + " to " + $("#slider-mw").slider("values", 1));
            $("#slider-mw-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });


        // HBA

        $(function () {
            var input = document.querySelector('#slider-hba-values');
            input.addEventListener('#slider-hba-values', resizeInput);
            $("#slider-hba").slider({
                range: true,
                min: 0,
                max: 10,
                values: [<?php echo $hbamin; ?>, <?php echo $hbamax; ?>],
                step: 1,
                slide: function (event, ui) {
                    $("#slider-hba-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-hba-values").val($("#slider-hba").slider("values", 0) + " to " + $("#slider-hba").slider("values", 1));
            $("#slider-hba-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

        // HBD

        $(function () {
            var input = document.querySelector('#slider-hbd-values');
            input.addEventListener('#slider-hbd-values', resizeInput);
            $("#slider-hbd").slider({
                range: true,
                min: 0,
                max: 5,
                values: [<?php echo $hbdmin; ?>, <?php echo $hbdmax; ?>],
                step: 1,
                slide: function (event, ui) {
                    $("#slider-hbd-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-hbd-values").val($("#slider-hbd").slider("values", 0) + " to " + $("#slider-hbd").slider("values", 1));
            $("#slider-hbd-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

        // cLogP

        $(function () {
            var input = document.querySelector('#slider-logp-values');
            input.addEventListener('#slider-logp-values', resizeInput);
            $("#slider-logp").slider({
                range: true,
                min: -3,
                max: 5,
                values: [<?php echo $logpmin; ?>, <?php echo $logpmax; ?>],
                step: 0.1,
                slide: function (event, ui) {
                    $("#slider-logp-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-logp-values").val($("#slider-logp").slider("values", 0) + " to " + $("#slider-logp").slider("values", 1));
            $("#slider-logp-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

        // ROTB

        $(function () {
            var input = document.querySelector('#slider-rotb-values');
            input.addEventListener('#slider-rotb-values', resizeInput);
            $("#slider-rotb").slider({
                range: true,
                min: 0,
                max: 10,
                values: [<?php echo $rotbmin; ?>, <?php echo $rotbmax; ?>],
                step: 1,
                slide: function (event, ui) {
                    $("#slider-rotb-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-rotb-values").val($("#slider-rotb").slider("values", 0) + " to " + $("#slider-rotb").slider("values", 1));
            $("#slider-rotb-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

        // TPSA

        $(function () {
            var input = document.querySelector('#slider-tpsa-values');
            input.addEventListener('#slider-tpsa-values', resizeInput);
            $("#slider-tpsa").slider({
                range: true,
                min: 0,
                max: 140,
                values: [<?php echo $tpsamin; ?>, <?php echo $tpsamax; ?>],
                step: 1,
                slide: function (event, ui) {
                    $("#slider-tpsa-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-tpsa-values").val($("#slider-tpsa").slider("values", 0) + " to " + $("#slider-tpsa").slider("values", 1));
            $("#slider-tpsa-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });


        // Fsp3

        $(function () {
            var input = document.querySelector('#slider-fsp3-values');
            input.addEventListener('#slider-fsp3-values', resizeInput);
            $("#slider-fsp3").slider({
                range: true,
                min: 0,
                max: 1,
                values: [<?php echo $fsp3min; ?>, <?php echo $fsp3max; ?>],
                step: 0.05,
                slide: function (event, ui) {
                    $("#slider-fsp3-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-fsp3-values").val($("#slider-fsp3").slider("values", 0) + " to " + $("#slider-fsp3").slider("values", 1));
            $("#slider-fsp3-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });


        // QED

        $(function () {
            var input = document.querySelector('#slider-qed-values');
            input.addEventListener('#slider-qed-values', resizeInput);
            $("#slider-qed").slider({
                range: true,
                min: 0,
                max: 1,
                values: [<?php echo $qedmin; ?>, <?php echo $qedmax; ?>],
                step: 0.05,
                slide: function (event, ui) {
                    $("#slider-qed-values").val(ui.values[0] + " to " + ui.values[1]);
                    resizeInput.call(input);
                }
            });
            $("#slider-qed-values").val($("#slider-qed").slider("values", 0) + " to " + $("#slider-qed").slider("values", 1));
            $("#slider-qed-values").attr('disabled', 'disabled');
            resizeInput.call(input);
        });

    </script>

    <br />
</body>
