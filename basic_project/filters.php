<?php

//echo (filter_has_var(INPUT_POST  , 'data' )) ?  'data found': 'no data found';

// echo (filter_has_var(INPUT_POST  , 'data' ) 
//     && (filter_input(INPUT_POST , 'data' , FILTER_VALIDATE_EMAIL))) ?
//     filter_var($_POST['data'] ,FILTER_SANITIZE_EMAIL) : 'no data found';

// $var = "true";

// if (filter_var($var , FILTER_VALIDATE_INT)) {
//    echo $var ." is a number";
// }else{
//     echo $var ." is not a number";    
// }

// $var = 'sfsdfs089798856sadfas';
// var_dump(filter_var($var , FILTER_SANITIZE_NUMBER_INT));

//$var = '<script>alert(1)</script>';
//var_dump($var);

//var_dump(filter_var($var , FILTER_SANITIZE_SPECIAL_CHARS));

// $filters = [
//     'data'=>FILTER_VALIDATE_EMAIL,
//     'data2'=> [
//     'filter'=>FILTER_VALIDATE_INT,
//     'options'=> [
//         "min_range"=>5,
//         'max_range'=>77
//         ]
//     ]    
// ];

// print_r(filter_input_array(INPUT_POST , $filters));
$arr = [
    'name'=>'idan',
    'age'=>8,
    'email'=>'test@tesd.com'

];
$filters = [
    
    'name'=> [
    'filter'=>FILTER_CALLBACK,
    'options'=> 'ucwords'
    ],
    'age'=>[
        'filter'=>FILTER_VALIDATE_INT,
        'options'=>[
            "min_range"=>1,
            'max_range'=>77
        ]
    ],
    'email'=>FILTER_VALIDATE_EMAIL
];

//print_r(filter_input_array(INPUT_POST , $filters));

print_r(filter_var_array($arr , $filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit"> SUBMIT </button>

</form>