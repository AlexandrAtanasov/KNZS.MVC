<?php

    class View
    {
        //public $templete_view; //specify a general default view
        
        /* 
        * content - page view
        * template - common pattern
        * data - array, pages elements
        */
        function generate($content_view, $template_view, $data = null)
        {
       		/*
	    	if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		    }
		    */
            
            include 'application/views/' . $template_view;
        }
    }

?>