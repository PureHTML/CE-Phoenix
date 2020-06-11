<?php

use PhpParser\Error;
use PhpParser\Node\Stmt;
use PhpParser\NodeFinder;
use PhpParser\ParserFactory;

require_once './PHP-Parser/vendor/autoload.php';

#chdir('../../');
#require 'includes/application_top.php';

class ImportLanguages {

    /**
     * Source Shop catalog location
     * @var string path 
     */
    public $oscLocation = '';

    /**
     * Destination
     * @var string Phoenix Sources dir 
     */
    public $phxLocation = '';

    /**
     * We work with this files
     * @var array translation files
     */
    protected $translationsList = [];

    /**
     * get candidates list from
     * @var string language dir name  
     */
    public $initialLanguage = 'english';

    /**
     * 
     * @param array $importLanguages
     */
    public function __construct($osc, $importLanguages = []) {
        $this->oscLocation = $osc;
        $this->phxLocation = dirname(dirname(__DIR__));
        $this->translationsList = $this->translationFiles($this->phxLocation . '/includes/languages/' . $this->initialLanguage);
        foreach ($importLanguages as $lng) {
            $this->importLanguage($lng);
        }
    }

    public function translationFiles($dest) {
        return self::scanAllDir($dest);
    }

    public function importLanguage($lng) {
        $srcDir = $this->oscLocation . '/includes/languages/' . $lng;
        $candidates = $this->translationFiles($srcDir);
        $destDir = $this->phxLocation . '/includes/languages/' . $lng;
        if (!file_exists($destDir)) {
            mkdir($destDir);
        }

        if (file_exists($srcDir . '.php') && !file_exists($destDir . '.php')) {
            $this->convertFile($srcDir . '.php', $destDir . '.php');
        }

        foreach ($this->translationsList as $weWant) {
            $srcFile = $srcDir . '/' . $weWant;
            $destFile = $destDir . '/' . $weWant;

            if (is_dir(dirname($srcFile)) && !is_dir(dirname($destFile))) {
                if (!mkdir(dirname($destFile), 0777, true)) {
                    echo 'cannot mkdir  ' . dirname($destFile);
                }
            }

            if (array_key_exists($weWant, $candidates)) {
                if (file_exists($destFile)) {
                    echo '  :O';
                } else {
                    if ($this->convertFile($srcFile, $destFile)) {
                        echo ' :)';
                    } else {
                        echo ' :/';
                    }
                }
            } else {
                echo ':( ';
            }
            echo ' ' . $weWant . " \n";
        }
    }

    public static function scanAllDir($dir) {
        $result = [];
        foreach (scandir($dir) as $filename) {
            if ($filename[0] === '.')
                continue;
            $filePath = $dir . '/' . $filename;
            if (is_dir($filePath)) {
                foreach (self::scanAllDir($filePath) as $childFilename) {
                    $result[$filename . '/' . $childFilename] = $filename . '/' . $childFilename;
                }
            } else {
                $result[$filename] = $filename;
            }
        }
        return $result;
    }

    public function parseContstant($code) {
        $trans = [];

        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
        try {
            $ast = $parser->parse($code);
        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            return;
        }



        $nodeFinder = new NodeFinder;

// Find all class nodes.
        $consts = $nodeFinder->findInstanceOf($ast, Stmt::class);



        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
        try {
            $ast = $parser->parse($code);
        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            return;
        }

        foreach ($ast as $element) {

            if (property_exists($element, 'expr') && property_exists($element->expr, 'name') && ($element->expr->name->parts[0] == 'define')) {
                $key = $element->expr->args[0]->value->value;
                $value = $element->expr->args[1]->value->value;
                if (!is_object($value)) {
                    $trans[$key] = $value;
                }
            }
        }
        return $trans;
    }

    static public function renderConst($keyword, $value) {
        $const = 'const ' . $keyword . ' = ';
        if (($value[0] == "'") || ($value[0] == '"')) {
            $const .=  $value;
        } else {
            $qs = "'";
            $const .= $qs . $value . $qs;
        }
        return $const.";\n";
    }

    public function convertFile($srcFile, $destFile) {
        $srcFileText = file_get_contents($srcFile);
        $srcKeyWords = $this->parseContstant($srcFileText);

        $destFileText = '';
        foreach (file($srcFile) as $srcLine) {
            if (strstr($srcLine, 'define(')) {
                $defineParts = self::parseDefine(trim($srcLine));
                if (empty($defineParts)) {
                    $destFileText .= $srcLine;
                } else {
                    foreach ($defineParts as $match) {
                        $keyword = substr($match[1], 1, strlen($match[1]) - 2);

                        if (array_key_exists($keyword, $srcKeyWords)) {
                            unset($srcKeyWords[$keyword]);
                        }

                        $destFileText .= self::renderConst($keyword, $match[2]);
                    }
                }
            } else {
                $destFileText .= $srcLine;
            }
        }
        foreach ($srcKeyWords as $key => $val) {
            $destFileText .= self::renderConst($key, $val);
        }
        return file_put_contents($destFile, $destFileText);
    }

    public static function parseDefine($srcLine) {
        $pattern = '/\\bdefine\\(\\s*("(?:[^"\\\\]+|\\\\(?:\\\\\\\\)*.)*"|\'(?:[^\'\\\\]+|\\\\(?:\\\\\\\\)*.)*\')\\s*,\\s*("(?:[^"\\\\]+|\\\\(?:\\\\\\\\)*.)*"|\'(?:[^\'\\\\]+|\\\\(?:\\\\\\\\)*.)*\')\\s*\\);/is';
        return preg_match_all($pattern, $srcLine, $matches, PREG_SET_ORDER) ? $matches : [];
    }

}

(new ImportLanguages('/home/vitex/Projects/PureHTML/yin20/WWW/osc/catalog', ['czech', 'german', 'french']));
