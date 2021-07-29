<?php
if (!isset($_GET['debug'])) {
    ini_set('display_errors', 0);
}
if (file_exists('../.localbase')) {
    define('BASEURL', file_get_contents('../.localbase'));
} else {
    define('BASEURL', '');
}
require_once './lib/engine.php';
include '../partials/page_meta.php';

$engine = new Engine();

$files = getDirContents();
if ($files) {
    $engine->clear();
}
$files_processed = [];
foreach ($files as $key => $file) {
    $html = file_get_contents($file);
    $text = remove_spaces(strip_tags(remove_scripts($html)));
    if (strlen($text) <= 1) {
        continue;
    }
    $key_fi = get_key($html);
    $title = @$page_meta[$key_fi]['title'];
    $file = path_to_url($file);
    if (!$title) {
        echo '<span style="color:pink">Title not found for \'<a href="' . BASEURL . $file . '">' . $file . '</a>\'. Using title of home</span><br>';
        $title = @$page_meta['home']['title'];
    }
    if (!$title) {
        echo '<span style="color:red">Title not found for \'<a href="' . BASEURL . $file . '">' . $file . '</a>\'. Skipping file indexing</span><br>';
        continue;
    }
    echo sprintf('Indexing file \'<a href="%s">%s</a>\'.<br>', BASEURL . $file, $title);
    $engine->add(
        $key,
        $title,
        strlen($text) > 180 ? substr($text, 0, 180) . '...' : $text,
        $text,
        BASEURL . $file
    );
    $files_processed[] = $file;
}
if ($files_processed) {
    $engine->build();
}
echo count($files_processed) . ' files indexed';
exit;

function remove_scripts($html)
{
    $html = preg_replace('#<video(.*?)>(.*?)</video>#is', ' ', $html);
    $html = preg_replace('#<audio(.*?)>(.*?)</audio>#is', ' ', $html);
    $html = preg_replace('#<\?php(.*?)\?>#is', ' ', $html);
    $html = preg_replace('#<!\-+(.*?)\-+>#is', ' ', $html);
    $html = preg_replace('#<style(.*?)>(.*?)</style>#is', ' ', $html);
    return preg_replace('#<script(.*?)>(.*?)</script>#is', ' ', $html);
}

function remove_spaces($html)
{
    $html = preg_replace('#\s+#is', ' ', $html);
    return trim(preg_replace('#\n+#is', ' ', $html));
}

function print_rr($data)
{
    echo '<pre>' . print_r($data, true);
}
function getDirContents($path = '..')
{
    $exclude = [
        'system',
        'partials',
        'search.php',
    ];
    $innerIterator = new RecursiveDirectoryIterator(
        $path,
        RecursiveDirectoryIterator::SKIP_DOTS
    );
    return new RecursiveIteratorIterator(
        new RecursiveCallbackFilterIterator($innerIterator, function ($file, $key, $iterator) use ($exclude) {
            if ($iterator->hasChildren() && !in_array($file->getFilename(), $exclude)) {
                return true;
            }
            if ($file->getExtension() == 'php' && !in_array($file->getFilename(), $exclude)) {
                return true;
            }
            return false;
        })
    );
}

function array_to_path($arr = [])
{
    return implode(DIRECTORY_SEPARATOR, $arr);
}
function get_key($html)
{
    $matches = [];
    preg_match('#\$page_meta_key\s*=\s*(.+?);#is', $html, $matches);
    return count($matches) == 2 ? trim($matches[1], '\'') : '';
}
function path_to_url($path)
{
    $path = str_replace(['/', '\\'], '/', $path);
    return trim($path, '.');
}
