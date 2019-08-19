<?php

namespace dongl\sensitiveWordFilter;

use dongl\sensitiveWordFilter\service\sensitive\Sensitive;
/*
 * 用: use keywordshielding\dirty\ShildDirtyWords;
 * 法: ShildDirtyWords::findAndHideKeyWords($testWords)
 * 
 * 敏感词过滤，基于DFA敏感词过滤算法，大字典的时候比较高效。
 * 使用只需要将本文件引入，然后再调用shildDirtyWords::findAndHideKeyWords($testWords)即可
 * 如果使用shildDirtyWords::findAndHideKeyWords($testWords)来屏蔽，会有比较好的屏蔽效果，
 * 这个是对字典的补充，忽略了一些无意义的词，但也可能造成语义的一点曲解。注意斟酌使用
 * 需要及时更新敏感词字典，敏感词字典在/Resources/BadWord.txt
 * https://github.com/ilovehuahua/php_keyword_shielding
 */

/**
 * 屏蔽关键词
 *
 * @author zhengbaowow
 * @date 2018-12-27
 */
class WordFilter {

    private static $badWordsUrl=__DIR__.'/Resources/BadWord.txt';


    /**
     * 忽略所有(空格,`,~,#,$,^,&,*,_)来进行匹配
     * @xu 20190725 update  增加replace参数,默认为false. 是否开启敏感词替换为*号
     *
     * @param type $needToCheckWords
     * @param type $replace @ true 返回包含的敏感词,没有返回空 || false 返回将敏感词替换为*号后的内容
     * @return string
     */
    public static function findSensitiveWords($needCheckWords, $replace = false) {
        $interference = ['&', '*'];
        $filename = '/words/words.txt';

        $sensitive = new \dongl\service\sensitive\Sensitive();
        $sensitive->interference($interference); //添加干扰因子
        $sensitive->addWords($filename); //添加敏感文件
        $testWords = "我说的吃屎,滚&蛋不是。。。";
        $words = $sensitive->filter($txt);

        var_dump($testWords);
        var_dump($words);

        Sensitive::filter($needCheckWords);


        return $searchModel->findAndHideKeyWords($needToCheckWords, $replace);
    }
    
}
