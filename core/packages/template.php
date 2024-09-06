<?php

	/**
	 * Include Template file
	 * @var file
	 * @var array
	 * @return path
	 */
	function include_template($file, $vars=array())
	{  
		/**
		 * Import variables into the current symbol table from an array
		 */
		extract($vars); 
		 
		/**
		 * Turn on output buffering
		 */
		ob_start();

			include($file);

			// Get the contents of the buffer
			$template = ob_get_contents(); 

				/**
				 * Perform a global regular expression match
				 * {{ anyContent }}
				 */
				if(preg_match_all("/{{(.*?)}}/", $template, $matches))
				{ 
					foreach($matches[1] as $match)
					{ 
						if(isset($vars[$match]))
						{
							$template = str_replace(
								'{{'.$match.'}}', 
								$vars[$match], $template
							);
						} 
					}
				}
 
		/**
		 * Clean (erase) the output buffer and turn off output buffering
		 */
		ob_end_clean();  
		echo $template; 
	}