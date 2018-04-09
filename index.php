<?php
echo '<!DOCTYPE html>';
echo '<html>';

echo '<head>';
echo '    <meta charset="utf-8" />';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '    <title>Elder Bot</title>';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1">';
echo '    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
echo '    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">';
echo '<link rel="icon" href="favicon.ico" type="image/x-icon">';
echo '</head>';
echo '<style>';
echo '    body{';
echo '        background-color: #f37d25;';    
echo '    }';

echo '    h1, p{';
echo '        text-align: center;';
echo '        color: white;';        
echo '    }';

echo '    iframe{';
echo '        background-color: honeydew;';
echo '    }';


echo '</style>';

echo '<body>';

echo '    <div class="w3-container w3-center">';
echo '        <h1>Chat with Elder Bot</h1>';
echo '        <p>Type in the chat below to get started.</p>';

echo '        <!--Insert this in the iframe source to get this working-->';
echo '        <!--  -->';

echo '        <iframe height="600" width="350" class="embed-responsive-item" src="https://webchat.botframework.com/embed/elderbot?s=ijaB88sOVCY.cwA.cWY.gO6q1l3Y28a_nqaUirA0DZwzs18SM2pd5co4UfDRsCc"></iframe>';

echo '    </div>';


echo '</body>';

echo '</html>';
?>