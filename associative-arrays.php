<?php

$student_info_keys = [
    'name',
    'age',
    'dob'
];

$students = [
    ['Shaun', 44, '1978-12-22'],
    ['1997-02-01','Gagandeep', 26]
];

$aa_students = [
    [
        "name" => "Shaun McKinnon",
        "age" => 44,
        "dob" => "1978-12-22"
    ],
    [
        "name" => "Amrit",
        "age" => 22,
        "dob" => "2001,01,18"
    ]
];

foreach ($aa_students as $student) {
    echo $student["age"];
}
?>