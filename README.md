# sensitive-word-filter

use dongl\sensitiveWordFilter\service\Sensitive;

$testWords = '996是sb';
$sensitive = new Sensitive();
var_dump($sensitive->filter($testWords));die;
