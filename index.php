<?php
$mokiniai=[
        "1"=>[
            "klase" => "5b",
            "kodas"=>rand(0,100),
            "vardas"=>"AUGUSTAS",
            "pavarde"=>"AUGUSTAVICIUS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "2"=>[
            "klase" => "5b",
            "kodas"=>rand(0,100),
            "vardas"=>"TITAS",
            "pavarde"=>"TITAVICIUS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "3"=>[
            "klase" => "5b",
            "kodas"=>rand(0,100),
            "vardas"=>"SIMONAS",
            "pavarde"=>"SIMONAVICIUS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "4"=>[
            "klase" => "5b",
            "kodas"=>rand(0,100),
            "vardas"=>"LAURYNAS",
            "pavarde"=>"LAURINAVICIUS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "5"=>[
            "klase" => "5b",
            "kodas"=>rand(0,100),
            "vardas"=>"ANTANAS",
            "pavarde"=>"ANTANAITIS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],

        "6"=>[
            "klase" => "5d",
            "kodas"=>rand(0,100),
            "vardas"=>"MYKOLAS",
            "pavarde"=>"MYKOLAVICIUS",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "7"=>[
            "klase" => "5d",
            "kodas"=>rand(0,100),
            "vardas"=>"AUSTEJA",
            "pavarde"=>"AUSTAVICIUTE",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "8"=>[
            "klase" => "5d",
            "kodas"=>rand(0,100),
            "vardas"=>"NERINGA",
            "pavarde"=>"NERINGAVICIUTE",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "9"=>[
            "klase" => "5d",
            "kodas"=>rand(0,100),
            "vardas"=>"AUGUSTE",
            "pavarde"=>"AUGUSTAITE",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),
        ],
        "10"=>[
            "klase" => "5d",
            "kodas"=>rand(0,100),
            "vardas"=>"LUKA",
            "pavarde"=>"LUKAITE",
            "kontroliniu darbu ivertinimai"=>[
                "matematika"=>rand(0,10),
                "istorija"=>rand(0,10),
                "lietuviu"=>rand(0,10)
            ],
            "data"=>date('Y-m-d H:i:s'),

        ],

];

?>
<head>
    <title></title>
    <style>
        table {
            width: 100%;
        }

        table, th {
            padding: 15px;
            border: 2px solid black;
            border-collapse:collapse ;
        }

        }

    </style>
</head>
<body>
<table class="table">
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vidurkis</th>
        <th>Duomenu formavimo data</th>
    </tr>

    <?php
    foreach ( $mokiniai as $array => $a ) {
        $sum = 0;
        echo "<tr>";
        echo "<th>" . $a['klase'] . "</th>";
        echo "<th>" . $a['kodas'] . "</th>";
        echo "<th>" . $a['vardas'] . "</th>";
        echo "<th>" . $a['pavarde'] . "</th>";
        foreach ($a['kontroliniu darbu ivertinimai'] as $b => $pazymiai) {

         $sum = $sum + $pazymiai;

        }
        $sum = $sum / count($a['kontroliniu darbu ivertinimai']);
        echo "<th>";
        echo round($sum);
        echo "<th>" . $a['data'] . "</th>";
        echo "</th>";
        echo '</th>';

    }


    ?>
</table>
</body>

