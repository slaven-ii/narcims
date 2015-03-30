<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 15:50
 */

namespace common\narci;

class Template {
    public $name;
    public $description;
    public $path;
    public $file;
}

class Narci {

    private static $_templatePath = '';
    private static $_templatePartPath = '/../common/narci/templates';

    /**
     * @return mixed
     */
    public static function getTemplatesList()
    {
        self::$_templatePath =  \Yii::getAlias('@app'). self::$_templatePartPath;


        $files = (array) self::get_files( 'php', 1 );

        foreach ( $files as $file => $full_path ) {
            if ( ! preg_match( '|Template Name:(.*)$|mi', file_get_contents( $full_path ), $header ) )
                continue;
            $name = self::_cleanup_header_comment( $header[1] );

            $template = new Template();
            $template->name = $name;
            $template->file = $file;
            $template->path = self::$_templatePartPath;
            $page_templates[ $file ] = $template;
        }

        return $page_templates;
    }

    public static function getTemplateDroplist()
    {
        $templates = self::getTemplatesList();

        $output = array();

        foreach ($templates as $tmpl) {
            $output[$tmpl->name] = $tmpl->name;
        }

        return $output;

    }

    /**
     * Strip close comment and close php tags from file headers used by WP.
     *
     * @since 2.8.0
     * @access private
     *
     * @see https://core.trac.wordpress.org/ticket/8497
     *
     * @param string $str Header comment to clean up.
     * @return string
     */
    private static function _cleanup_header_comment( $str ) {
        return trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $str));
    }

    /**
     * Return files in the theme's directory.
     *
     * @since 3.4.0
     * @access public
     *
     * @param mixed $type Optional. Array of extensions to return. Defaults to all files (null).
     * @param int $depth Optional. How deep to search for files. Defaults to a flat scan (0 depth). -1 depth is infinite.
     * @param bool $search_parent Optional. Whether to return parent files. Defaults to false.
     * @return array Array of files, keyed by the path to the file relative to the theme's directory, with the values
     * 	being absolute paths.
     */
    public static function get_files( $type = null, $depth = 0, $search_parent = false ) {
        $files = (array) self::scandir( self::$_templatePath, $type, $depth );

        return $files;
    }

    /**
     * Scans a directory for files of a certain extension.
     *
     * @since 3.4.0
     * @access private
     *
     * @param string $path Absolute path to search.
     * @param mixed  Array of extensions to find, string of a single extension, or null for all extensions.
     * @param int $depth How deep to search for files. Optional, defaults to a flat scan (0 depth). -1 depth is infinite.
     * @param string $relative_path The basename of the absolute path. Used to control the returned path
     * 	for the found files, particularly when this function recurses to lower depths.
     */
    private static function scandir( $path, $extensions = null, $depth = 0, $relative_path = '' ) {
        if ( ! is_dir( $path ) )
            return false;

        if ( $extensions ) {
            $extensions = (array) $extensions;
            $_extensions = implode( '|', $extensions );
        }

        $relative_path = self::trailingslashit( $relative_path );
        if ( '/' == $relative_path )
            $relative_path = '';

        $results = scandir( $path );
        $files = array();

        foreach ( $results as $result ) {
            if ( '.' == $result[0] )
                continue;
            if ( is_dir( $path . '/' . $result ) ) {
                if ( ! $depth || 'CVS' == $result )
                    continue;
                $found = self::scandir( $path . '/' . $result, $extensions, $depth - 1 , $relative_path . $result );
                $files = array_merge_recursive( $files, $found );
            } elseif ( ! $extensions || preg_match( '~\.(' . $_extensions . ')$~', $result ) ) {
                $files[ $relative_path . $result ] = $path . '/' . $result;
            }
        }

        return $files;
    }

    /**
     * Appends a trailing slash.
     *
     * Will remove trailing forward and backslashes if it exists already before adding
     * a trailing forward slash. This prevents double slashing a string or path.
     *
     * The primary use of this is for paths and thus should be used for paths. It is
     * not restricted to paths and offers no specific path support.
     *
     * @since 1.2.0
     *
     * @param string $string What to add the trailing slash to.
     * @return string String with trailing slash added.
     */
    private static function trailingslashit( $string ) {
        return self::untrailingslashit( $string ) . '/';
    }

    /**
     * Removes trailing forward slashes and backslashes if they exist.
     *
     * The primary use of this is for paths and thus should be used for paths. It is
     * not restricted to paths and offers no specific path support.
     *
     * @since 2.2.0
     *
     * @param string $string What to remove the trailing slashes from.
     * @return string String without the trailing slashes.
     */
    private static function untrailingslashit( $string ) {
        return rtrim( $string, '/\\' );
    }

}