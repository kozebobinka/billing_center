<?php

class RC_Loader extends CI_Loader
{

    public function load_template($template_name, $vars = array(), $return = false)
    {
        if ($return) {
            $content = $this->view('includes/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('includes/footer', $vars, $return);
            return $content;
        } else {
            $this->view('includes/header', $vars);
            $this->view($template_name, $vars);
            $this->view('includes/footer', $vars);
        }
    }

    public function load_table($template_name, $vars = array(), $return = false)
    {
        if ($return) {
            $content = $this->view('includes/header', $vars, $return);
            $content .= $this->view('includes/table_header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('includes/table_footer', $vars, $return);

            return $content;
        } else {
            $this->view('includes/header', $vars);
            $this->view('includes/table_header', $vars);
            $this->view($template_name, $vars);
            $this->view('includes/table_footer', $vars);
        }

    }

}
