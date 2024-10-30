=== Last Modified ===
Contributors: yaofuyuan
Tags: modified, last, date, time
Stable tag: trunk


Add post last modified to HTTP header to enable squid or cdn to cache your wordpress web page.
Squid will not cache the page without http header field Last-Modified.

== Installation ==
1. Upload `header-last-modified` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress,must do it!
3. Place `header_last_modified()` in /your_website_path/wp-includes/template-loader.php before "if ( $template = apply_filters( 'template_include', $template ) )" .
   Like this:
				header_last_modified();
				if ( $template = apply_filters( 'template_include', $template ) )
					include( $template );
				return;
				
== Configuration ==
