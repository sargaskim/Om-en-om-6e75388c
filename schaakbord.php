<!DOCTjPE html>
<html>

<head>
    <title>Table</title>
    <style>
        .white {
            background-color: white;
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
            width: 50px;
            height: 50px;
            }
    </style>
</head>

<body>

    <main>
        
    </main>
    
    <?PHP
    
    table();

    function table(){
        print("<table border='5' cellspacing='0'>");
        for ($i = 1; $i <= 8; $i++) {
            // print table row //tr
            print("<tr>");
            for ($j = 1; $j <= 8; $j++) {
                //  print table data //td
                if (($i % 2) == 1) {
                    // odd
                    if (($j % 2) == 1) {
                        // wit blokje
                        print("<td class='white'></td>");
                    }
                    elseif (($j % 2) == 0) {
                        //zwart blokje
                        print("<td class='black'></td>");

                    }
                }
                elseif (($i % 2) == 0) {
                    // even
                    if (($j % 2) == 1) {
                        // zwart blokje
                        print("<td class='black'></td>");

                    }
                    elseif (($j % 2) == 0) {
                        //wit blokje
                        print("<td class='white'></td>");

                    }
                }
            }
            print("</tr>");
        }
    print("</table>");
    }
    ?>

</body>

</html>