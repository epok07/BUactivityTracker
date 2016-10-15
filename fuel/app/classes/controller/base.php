
<?php 
class Controller_Base extends Controller_Template
{

	public $template = 'inspinia';
    /**
     * Your before method
     */
    public function before()
    {
        parent::before(); // Without this line, templating won't work!

        // do stuff

        $controllers = File::read_dir(APPPATH . 'classes/controller', 2,array(
                '!^\.', // no hidden files/dirs
                '!^welcome' => 'dir', // no private dirs
                '\.php$' => 'file', // only get png's
                '\.css$' => 'file', // or css files
                '!^_', // exclude everything that starts with an underscore.
            ));
        // Read with a limited dept
        $endpoints = File::read_dir(APPPATH . 'views', 2,array(
                '!^\.', // no hidden files/dirs
                '!^welcome' => 'dir', // no private dirs
                '\.php$' => 'file', // only get png's
                '\.css$' => 'file', // or css files
                '!^template\.php$' => 'file', // or templates files
                '!^inspinia\.php$' => 'file', // or templates files

                '!^_', // exclude everything that starts with an underscore.
            ));

        //Debug::dump($endpoints);

        $modules = array_keys($endpoints);
        //Debug::dump($modules); die();
         $temp  = $tmp = array();
        foreach ($modules as $key => $module_name) {

            // $clean_key = trim(stripslashes($key));
            //$clean_key = preg_replace("/\/",'',$key);
            //$clean_key = Str::sub($key, 1, -1);

            $module_name_stripped = Str::sub($module_name, 0, -1);
            
            $tmp[] = $module_name_stripped;
        }
        $modules = $tmp;
        
        // Build a sanitised version of the routes settings
        $count = 0;
        foreach ($endpoints as $key => $module) {
            $temp[$modules[$count]] = $module;
            $count++;
        }

        $endpoints = $temp;

        //Debug::dump($modules);

        $subnav = array();

        View::set_global('subnav', $subnav);
        View::set_global('modules', $modules);
        View::set_global('endpoints', $endpoints);

        View::set_global('controllers', $controllers);

        View::set_global('sitetitle', config::get('sitetitle'));

        View::set_global('breadcrumb', \Breadcrumb::create_links(), false);
 



    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // do stuff

        return $response; // make sure after() returns the response object
    }

   
}