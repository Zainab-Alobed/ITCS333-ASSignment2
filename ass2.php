<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>API</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main class="container">
            <h1>RETRIEVED DATA</h1>
            <?php
            //API retreiving
            $URL= "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
            $response = file_get_contents($URL);
            $result = json_decode($response, true);
            #var_dump($result);
            $result=$result['results'];
            ?>
            <table class="striped">
                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>The Programs</th>
                    <th>Nationality</th>
                    <th>Collages</th>
                    <th>Number of Sudents</th>
                </tr>
                <?php
                    //making rows
                    foreach($result as $i=>$row){
                        echo "<tr>";
                        echo "<td>".$row['year']."</td>";
                        echo "<td> ".$row['semester']."</td>";
                        echo "<td>".$row['the_programs']."</td>";
                       
                        echo "<td>".$row['nationality']."</td>";
                        echo "<td>".$row['colleges']."</td>";
                        echo "<td>".$row['number_of_students']."</td>";
                        echo "</tr>";
                    }
                
                
                ?>
            </table>
        </main>
    </body>
</html>

    
    