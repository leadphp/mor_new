<?php
/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */

function cmsPages()
{
     return $cmsPages = \App\Pages::orderBy('title','asc')->get();
}

function meta_tags($slug='default')
{
        $sl = \Request::path() == '/' ? '/home' : '/'.\Request::path();
        $MetaTags = \App\MetaTags::where('slug',$sl)->first();

        if(isset($MetaTags->meta_title))
        {
            echo '<title>'.$MetaTags->meta_title.'</title>'."\n";   
            echo '<meta name="keywords" content="'.$MetaTags->meta_keywords.'" />'."\n";   
            echo '<meta name="description" content="'.$MetaTags->meta_descriptions.'" />';            
        }else{
            echo '<title>Mortgage Calculator</title>'."\n";   
            echo '<meta name="keywords" content="Mortgage Calculator" />'."\n";   
            echo '<meta name="description" content="Mortgage Calculator" />';       
        }
}

function update_admin_image()
{   
    $admin_image = \App\Adminimg::orderBy('id','desc')->first();
    return $admin_image->admin_img;
}









