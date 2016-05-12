<!-- // http://www.zend.com/en/resources/php7_infographic -->
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Performace</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.css">
</head>
<body role="document">
    <div class="row ml10">
        <div class="col-md-10">
            <h1>Performance</h1>
        </div>
        <div class="col-md-12">
            <ul>
                <li>PHP5 spends 20% of time allocating memory</li>
                <li>PHP7 has less memory accesses (less indirections)</li>
                <li>PHP7 simple data are copied</li>
                <li>PHP7 complex data are shared (Copy on Write)</li>
                <li>PHP7 +- 50% less memory use</li>
                <li>
                    PHP7 2-3 time fater that PHP 5,
                    <a target="_blank" href="http://www.zend.com/en/resources/php7_infographic">
                        benchmarks
                    </a>
                </li>
            </ul>
            <h3>Memory Optimisations</h3>
            <table class="table">
                <thead>
                    <tr><th>Data Structure</th><th>PHP 5</th><th>PHP 7</th></tr>
                </thead>
                <tr>
                    <td><strong>zval simple <br> (null, bool, int, floats)</strong></td>
                    <td>32 bytes<br>1 indirection<br>1 allocation</td>
                    <td>16 bytes<br>no indirections<br>no allocations</td>
                </tr>
                <tr>
                    <td><strong>zval complex<br>(string, object, array)</strong></td>
                    <td>80 bytes<br>2 indirections<br>2 allocations</td>
                    <td>36 bytes<br>1 indirection<br>1 allocation</td>
                </tr>
                <tr>
                    <td><strong>HashTable element</strong></td>
                    <td>80 bytes</td>
                    <td>36 bytes</td>
                </tr>
                <tr>
                    <td><strong>HashTable</strong></td>
                    <td>72 bytes</td>
                    <td>56 bytes</td>
                </tr>
                <tr>
                    <td><strong>Object</strong></td>
                    <td>96 bytes</td>
                    <td>40 bytes</td>
                </tr>
            </table>
            <h3>Arrays optimisations</h3>
            <table class="table">
                <thead>
                    <tr><th>Arrays</th><th>PHP 5</th><th>PHP 7</th></tr>
                </thead>
                <tr>
                    <td><strong>Allocations</strong></td>
                    <td>2 + 2 per element</td>
                    <td>2 + 0 per element</td>
                </tr>
                <tr>
                    <td><strong>Size</strong></td>
                    <td>72 + 112 per element</td>
                    <td>56 + 36 per element</td>
                </tr>
                <tr>
                    <td><strong>Indirection(look up)</strong></td>
                    <td>4</td>
                    <td>2</td>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
    </div>
</body>
