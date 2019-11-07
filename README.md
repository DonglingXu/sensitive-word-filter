# sensitive-word-filter

use dongl\sensitiveWordFilter\service\Sensitive;

$testWords = '大坏蛋';
$sensitive = new Sensitive();
var_dump($sensitive->filter($testWords));
