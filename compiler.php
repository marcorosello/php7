<?php

/*
 * Most of type errors will only show up in runtime as there is no precompile process.
 * However the AST will allow static analysers to pick up those issues before you run the function.
 * This would be very useful to avoid errors that are hard to get, for example if you get the string false that would be
 * converted to true. Obviously that is not what you expect
*/
require '/var/www/default/php7/php-ast/util.php';

$filename = 'code.php';
$phpCode = file_get_contents($filename);
$tokens = token_get_all($phpCode);
$ast = ast\parse_file($filename, $version=30);
$opcodes = `phpdbg -p {$filename}`;

function prettyTokens($tokens, $displayWhiteSpaces) {
    $html = '<table class="table">';
    $html .= '<thead><tr><th>Line #</th><th>Token</th><th>Value</th></tr></thead>';
    foreach ($tokens as $token) {
        if (is_array($token)) {
            if(!$displayWhiteSpaces && $token[0] == 382) continue;
            $tokenName =  token_name($token[0]);
            $html .= "<tr><td>{$token[2]}</td>";
            $html .= "<td>{$tokenName}</td>";
            $html .= "<td>{$token[1]}</td></tr>";
        }
    }
    $html .= '</table>';

    return $html;
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Compiler</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.css">
</head>
<body role="document">
    <div class="row ml10">
        <div class="col-md-10">
            <h2>Original code</h2>
        <pre><?= htmlspecialchars($phpCode); ?></pre>
        </div>
        <div class="col-md-6">
            <h2>1. Token list</h2>
            <?= prettyTokens($tokens, false); ?>
        </div>
        <div class="col-md-10">
            <h2>2. Abstract syntax tree</h2>
            <pre><?= ast_dump($ast); ?></pre>
        </div>
        <div class="col-md-10">
            <h2>3. Opcodes</h2>
            <pre><?= $opcodes?></pre>
        </div>

    </div>
</body>
