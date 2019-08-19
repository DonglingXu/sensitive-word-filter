# sensitive-word-filter

use dongl\sensitiveWordFilter\service\Sensitive;

$testWords = '大sb';
$sensitive = new Sensitive();
var_dump($sensitive->filter($testWords));
