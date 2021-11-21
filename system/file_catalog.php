<?php
class File_Catalog
{
    private $json = [];
    private $filepath = __DIR__ . '/files_catalog.json';
    private $dirpath = __DIR__ . '/../blog';
    private $period = '5 days';
    private $first_run = false;
    private $cookie_name = 'xcks_ksbledupkblog';
    public function __construct()
    {
        if (file_exists($this->filepath)) {
            $json = file_get_contents($this->filepath);
            if ($json && !empty(trim($json))) {
                $this->json = json_decode($json, true);
                return;
            }
        }
        $this->first_run = true;
    }
    public function scan()
    {
        $innerIterator = new RecursiveDirectoryIterator(
            $this->dirpath,
            RecursiveDirectoryIterator::SKIP_DOTS
        );
        $files = new RecursiveIteratorIterator(
            new RecursiveCallbackFilterIterator($innerIterator, function ($file, $key, $iterator) {
                if ($iterator->hasChildren()) {
                    return true;
                }
                if ($file->getExtension() == 'php') {
                    return true;
                }
                return false;
            })
        );
        if ($files) {
            $this->reset();
            foreach ($files as $file) {
                $folder = str_replace(__DIR__, '', $file->getPath());
                $folder = trim(substr($folder, strrpos($folder, DIRECTORY_SEPARATOR) + 1), '\. \\\/');
                if ($folder == 'blog') {
                    $this->add($file->getFilename());
                }
            }
            $this->save();
        }
    }
    public function add($file)
    {
        if (!isset($this->json[$file])) {
            $this->json[$file] = $this->first_run ? date('Y-m-d H:i:s', strtotime('-6 days')) : date('Y-m-d H:i:s');
        }
    }
    public function check()
    {
        if (empty($this->json)) {
            return false;
        }

        $blog = $_COOKIE[$this->cookie_name] ?? null;

        if ($blog) {
            $blog = base64_decode($blog);
        }
        if (!isset($this->json[$blog])) {
            $blog = null;
        }

        $blog_found = is_null($blog);

        $res = [];
        foreach ($this->json as $blog_name => $blog_time) {
            if ($blog_found && strtotime($blog_time) >= strtotime('-' . $this->period)) {
                $res[$blog_name] = $blog_time;
            }
            if ($blog == $blog_name) {
                $blog_found = true;
            }
        }
        return count($res) > 0;
    }
    public function setcookie()
    { 

         $cookieName = $this->cookie_name;
         $cookieValue = base64_encode(array_key_last($this->json));
         $path = "https://mavenology.site";

     
         
 echo "<script>document.cookie = '".$cookieName.'='.$cookieValue.'; expires=Sat, 18 Dec 2021 12:00:00 UTC; path='.$path."'</script>";


    }
    public function reset()
    {
        $this->json = array_filter($this->json, function ($file) {
            return file_exists($this->dirpath . '/' . $file);
        }, ARRAY_FILTER_USE_KEY);
    }
    public function save()
    {
        asort($this->json);
        if ($this->first_run) {
            $this->json[array_key_last($this->json)] = date('Y-m-d H:i:s');
        }
        file_put_contents($this->filepath, json_encode($this->json));
    }
}
