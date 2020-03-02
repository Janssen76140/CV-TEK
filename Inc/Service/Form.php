<?php 
namespace Inc\Service;

class Form
{

    private $errors;
    private $post;
    public function __construct($errors, $method = 'POST')
    {
        if ($method == 'POST') {
            $this->post = $_POST;
        } else {
            $this->post = $_GET;
        }
        $this->errors = $errors;
    }

    /**
     * label
     * @param $name string
     * @param $label string
     * @return string
     */
    public function label(string $name,string $label) 
    {
        return '<br><label for="' . $name . '">' . $label . '</label>';      
    }

    private function getValue($name)
    {
        if (!empty($_POST[$name])) {
            return $_POST[$name];
        } else {
            return '';
        }
    }

    public function input($name,$type='text')
    {
        return '<br><input type="' . $type . '" name="' . $name . '" id="'. $name .'" value="'. $this->getValue($name) .'" />';
    }

    public function submit($name= 'submitted', $value= 'Envoyer') 
    {
        return '<br><input type="submit" name="' . $name . '" value="' . $value . '"/><br>';
    }

    public function textarea($name)
    {
        return '<br><textarea name="'. $name .'" id="'. $name .'">'. $this->getValue($name) .'</textarea><br>';
    }

    public function errors($name) {
        $error = !empty($this->errors[$name]) ? $this->errors[$name] : '';
        return '<br><span class="error">' . $error . '</span><br>';
    }
}

